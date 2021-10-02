<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $user_id = $this->session->userdata('user_id');
        if ($user_id != NULL){
            redirect('user', 'refresh');
        }        
    }

    public function index() {
        $data = array();
        $data['title'] = 'New Profile';
        $data['all_resumes'] = $this->User_model->select_all_resumes();
        $data['main'] = $this->load->view('website/create_account', $data, true);
        $this->load->view('website/master', $data);
        $update = "UPDATE tbl_verifications SET status = '0', modified_at = '" . date("Y-m-d H:i:s") . "' WHERE created_at < DATE_SUB(CURDATE(), INTERVAL 1 DAY)";
        $this->db->query($update);
        $delete = "DELETE FROM tbl_users WHERE user_status = '0' AND created_at < DATE_SUB(CURDATE(), INTERVAL 1 DAY)";
        $this->db->query($delete);
    }
    
    public function save_user() {
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|is_unique[tbl_users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('resume_id', 'Resume Category', "trim|required");
        $this->form_validation->set_rules('sex', 'Sex', "trim|required");
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|numeric|is_unique[tbl_users.mobile]');
        if ($this->form_validation->run() == FALSE) {
            $data = array();
            $data['title'] = 'New Profile';
            $data['all_resumes'] = $this->User_model->select_all_resumes();
            $data['main'] = $this->load->view('website/create_account', $data, true);
            $this->load->view('website/master', $data);
        } else {
            /* Google reCAPTCHA API*/
            $response = $this->input->post('g-recaptcha-response', true);
            $url = 'https://www.google.com/recaptcha/api/siteverify';
            $reCAPTCHA = array(
		'secret' => '6LcaLlQUAAAAABkwertitykFwmFl8-JJXJ6Nu-MW',
		'response' => $response
            );
            $options = array(
		'http' => array (
                    'method' => 'POST',
                    'content' => http_build_query($reCAPTCHA)
		)
            );
            $context  = stream_context_create($options);
            $verify = file_get_contents($url, false, $context);
            $captcha_success=json_decode($verify);
            if ($captcha_success->success==false) {
                $this->session->set_flashdata('save_user', 'Please Verify That You Are Not Robot');
                redirect('home/index');
            } 
            else if ($captcha_success->success==true) {
                $data = array();
                $data['first_name'] = $this->input->post('first_name', true);
                $data['last_name'] = $this->input->post('last_name', true);
                $data['email'] = $this->input->post('email', true);
                $data['password'] = $this->input->post('password', true);
                $data['fk_resume_id'] = $this->input->post('resume_id', true);
                $data['sex'] = $this->input->post('sex', true);
                $data['mobile'] = $this->input->post('mobile', true);
                $data['user_type'] = 2;
                $data['created_at'] = date("Y-m-d H:i:s");
                $this->db->insert('tbl_users', $data);
                $user_id = $this->db->insert_id();
                $generated_PIN = $this->User_model->generate_PIN();
                $verification = array();
                $verification['fk_user_id'] = $user_id;
                $verification['verification_property'] = $data['email'];
                $verification['pin_code'] = $generated_PIN;
                $verification['status'] = 1;
                $verification['created_at'] = date("Y-m-d H:i:s");
                $this->db->insert('tbl_verifications', $verification);
                $this->User_model->send_email_verification_link($generated_PIN, $data['email']);
                $this->session->set_flashdata('save_user', 'Account Created Successfully! Check Your Email For Varification');
                redirect('home/index');
            }            
        }
    }
    
    public function user_verification() {
        $data = array();
        $data['title'] = 'User Verification';
        $data['all_resumes'] = $this->User_model->select_all_resumes();
        $data['main'] = $this->load->view('auth/user_verification', $data, true);
        $this->load->view('website/master', $data);
    }
    
    public function check_user_verification() {        
        $this->form_validation->set_rules('value', 'Email', 'trim|required');
        $this->form_validation->set_rules('pin', 'Verification Code', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data = array();
            $data['title'] = 'User Verification';
            $data['all_resumes'] = $this->User_model->select_all_resumes();
            $data['main'] = $this->load->view('auth/user_verification', $data, true);
            $this->load->view('website/master', $data);
        } else {
            $value = $this->input->post('value', true); 
            $pin = $this->input->post('pin', true); 
            $sql = "SELECT * FROM tbl_verifications WHERE status = '1' AND verification_property = '$value' AND pin_code = '$pin'";
            $query_result = $this->db->query($sql);
            $result = $query_result->row_array();            
            if ($result){
                $user_id = $result['fk_user_id'];
                $progres = array();
                $progres['fk_user_id'] = $user_id;
                $progres['account_setting'] = 10;   
                $this->db->insert('tbl_user_progresses', $progres);
                $update = "UPDATE tbl_users SET user_status = '1', modified_by = '$user_id', modified_at = '" . date("Y-m-d H:i:s") . "' WHERE email = '$value'";
                $this->db->query($update);
                $delete = "DELETE FROM tbl_verifications WHERE verification_property = '$value' AND pin_code = '$pin'";
                $this->db->query($delete);
                $this->session->set_flashdata('success', 'Your Email is Verified. Now You Can Login');
                redirect('home/login');    
            }
            else{
                $this->session->set_flashdata('exception', 'We do not found your account. You might be wrong while putting your email address');
                redirect('home/user_verification');
            }
        }
    }
    
    public function login() {
        $data = array();
        $data['title'] = 'Login';
        $data['all_resumes'] = $this->User_model->select_all_resumes();
        $data['main'] = $this->load->view('website/login', $data, true);
        $this->load->view('website/master', $data);
    }
    
    public function forgot_password() {
        $data = array();
        $data['title'] = 'Forgot Password';
        $data['main'] = $this->load->view('website/forgot_password', $data, true);
        $this->load->view('website/master', $data);
    }
    
    public function check_validity() {        
        $this->form_validation->set_rules('value', 'Email', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data = array();
            $data['title'] = 'Forgot Password';
            $data['main'] = $this->load->view('website/forgot_password', $data, true);
            $this->load->view('website/master', $data);
        } else {
            $value = $this->input->post('value', true); 
            $sql = "SELECT * FROM tbl_users WHERE email = '$value'";
            $query_result = $this->db->query($sql);
            $result = $query_result->row_array();            
            if ($result){
                $user_id = $result['pk_user_id'];
                redirect('home/send_password/'.$user_id);    
            }
            else{
                $this->session->set_flashdata('exception', 'We do not found your account. You might be wrong while putting your email address');
                redirect('home/forgot_password');
            }
        }
    }
    
    public function send_password($user_id) {
        $select_user = $this->User_model->select_user_info($user_id);
        $generated_PIN = $this->User_model->generate_PIN();
        $this->User_model->ensure_one_email_for_one_password($select_user->email);
        $data = array();
        $data['fk_user_id'] = $user_id;
        $data['property'] = $select_user->email;
        $data['temporary_password'] = $generated_PIN;
        $data['status'] = 1;
        $data['created_at'] = date("Y-m-d H:i:s");
        $this->db->insert('tbl_password_change_requests', $data);
        $this->User_model->send_email($generated_PIN, $data['property']);
        $this->session->set_flashdata('success', 'We send a random password to your Email. Check your email address. The temporary password validity is 24 hours');
        redirect('home/forgot_password');
    }
    
    public function change_password() {
        $data = array();
        $data['title'] = 'Change Password';
        $data['main'] = $this->load->view('website/change_password', $data, true);
        $this->load->view('website/master', $data);
    }
    
    public function check_password_validity() {
        $sql = "UPDATE tbl_password_change_requests SET status = '0', modified_at = '" . date("Y-m-d H:i:s") . "' WHERE created_at < DATE_SUB(CURDATE(), INTERVAL 1 DAY)";
        $this->db->query($sql); 
        $this->form_validation->set_rules('temp_password', 'Temporary Password', 'required');
        $this->form_validation->set_rules('password', 'New Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $data = array();
            $data['title'] = 'Change Password';
            $data['main'] = $this->load->view('website/change_password', $data, true);
            $this->load->view('website/master', $data);
        } else {
            $temp_password = $this->input->post('temp_password', true);
            $password = $this->input->post('password', true);
            $sql = "SELECT * FROM tbl_password_change_requests WHERE created_at > DATE_SUB(CURDATE(), INTERVAL 1 DAY) AND temporary_password = '$temp_password' AND status = '1'";
            $query_result = $this->db->query($sql);
            $result = $query_result->row_array();    
            if ($result){
                $property = $result['property'];
                $sql = "UPDATE tbl_users SET password = $password, modified_at = '" . date("Y-m-d H:i:s") . "' WHERE email='$property'";
                $this->db->query($sql);  
                $sql = "UPDATE tbl_password_change_requests SET status = '0', modified_at = '" . date("Y-m-d H:i:s") . "' WHERE property='$property'";
                $this->db->query($sql);  
                $this->session->set_flashdata('success', 'Successfully Changed!');
                redirect('home/change_password');                
            }
            else{
                $this->session->set_flashdata('exception', 'Invalid!');
                redirect('home/change_password');
            }
        }
    }  
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        $user_id = $this->session->userdata('user_id');
        if ($user_id != NULL){
            redirect('user/my_dashboard', 'refresh');
        }
    }
    
    public function index(){
        redirect('home/login');
    }
    
    public function check_user_login(){
        $this->form_validation->set_rules('value', 'User name or Email or Mobile', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data = array();
            $data['title'] = 'Login';
            $data['all_resumes'] = $this->User_model->select_all_resumes();
            $data['main'] = $this->load->view('website/login', $data, true);
            $this->load->view('website/master', $data);
        }else{
            $value = $this->input->post('value', true); 
            $password = $this->input->post('password', true);
            $sql = "SELECT * FROM tbl_users WHERE (email = '$value' OR username = '$value' OR mobile = '$value') AND password = '$password' AND user_status = '1'";
            $query_result = $this->db->query($sql);
            $result = $query_result->row_array();            
            if ($result){
                $sdata = array();
                $sdata['user_id'] = $result['pk_user_id'];
                $sdata['user_image'] = $result['user_profile_picture'];
                $sdata['user_name'] = $result['first_name'];
                $this->session->set_userdata($sdata);
                redirect('user/my_dashboard');                
            }
            else{ 
                $this->session->set_flashdata('exception', 'Your Login Credentials is Invalid!');
                redirect('home/login');
            }
        }
    }   
}
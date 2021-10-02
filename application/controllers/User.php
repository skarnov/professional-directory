<?php
defined('BASEPATH') OR exit('No direct script access allowed');
       
class User extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
            redirect('login/index', 'refresh');
        }
        $user_progress = array();
        $user_progress['count'] = $this->User_model->count_user_progress_for_the_user($user_id);
        $this->session->set_userdata($user_progress);
    }
        
    public function account() {        
        $user_id = $this->session->userdata('user_id');
        $data = array();
        $data['title'] = 'Dashboard';
        $data['all_resumes'] = $this->User_model->select_all_resumes();  
        $data['user_info'] = $this->User_model->select_user_info($user_id);
        $data['main'] = $this->load->view('website/dashboard', $data, true);
        $this->load->view('website/master', $data);
    }
    
    public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_image');
        $this->session->unset_userdata('user_name');
        $this->session->set_flashdata('exception', 'You are Successfully Logout!');
        redirect('cms/main');
    }
    
    public function update_username() {        
        $id = $this->session->userdata('user_id');
        $this->form_validation->set_rules('username', 'Username', 'trim|edit_unique[tbl_users.username.'.$id.']');
        if ($this->form_validation->run() == FALSE) {
            $data = array();
            $data['title'] = 'Dashboard';
            $data['all_resumes'] = $this->User_model->select_all_resumes();       
            $data['user_info'] = $this->User_model->select_user_info($id);
            $data['main'] = $this->load->view('website/my_dashboard', $data, true);
            $this->load->view('website/master', $data);
        } else {
            $data = array();
            $data['username'] = $this->input->post('username', true);
            $data['modified_at'] = date("Y-m-d H:i:s");
            $data['modified_by'] = $id;
            $this->db->where('pk_user_id', $id);
            $this->db->update('tbl_users', $data);
            $this->session->set_flashdata('update_username', 'Username Updated!');
            redirect('user/my_dashboard');
        }
    }
    
    public function my_dashboard() {        
        $user_id = $this->session->userdata('user_id');
        $data = array();
        $data['title'] = 'Dashboard';
        $data['all_resumes'] = $this->User_model->select_all_resumes();       
        $data['user_info'] = $this->User_model->select_user_info($user_id);
        $data['main'] = $this->load->view('website/my_dashboard', $data, true);
        $this->load->view('website/master', $data);
    }
    
    public function basic_info() {
        $user_id = $this->session->userdata('user_id');
        $data = array();
        $data['title'] = 'Dashboard';
        $data['all_resumes'] = $this->User_model->select_all_resumes();       
        $data['user_info'] = $this->User_model->select_user_info($user_id);
        $data['main'] = $this->load->view('website/basic_info', $data, true);
        $this->load->view('website/master', $data);
    }
    
    public function update_user() {
        $id = $this->input->post("pk_user_id");
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|edit_unique[tbl_users.email.'.$id.']');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('resume_id', 'Resume Category', "trim|required");
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|numeric|edit_unique[tbl_users.mobile.'.$id.']');
        if ($this->form_validation->run() == FALSE) {
            $user_id = $this->session->userdata('user_id');
            $data = array();
            $data['title'] = 'Dashboard';
            $data['all_resumes'] = $this->User_model->select_all_resumes();       
            $data['user_info'] = $this->User_model->select_user_info($user_id);
            $data['main'] = $this->load->view('website/dashboard', $data, true);
            $this->load->view('website/master', $data);
        } else {
            $data = array();
            $data['first_name'] = $this->input->post('first_name', true);
            $data['last_name'] = $this->input->post('last_name', true);
            $data['email'] = $this->input->post('email', true);
            $data['password'] = $this->input->post('password', true);
            $data['fk_resume_id'] = $this->input->post('resume_id', true);
            $data['sex'] = $this->input->post('sex', true);
            $data['mobile'] = $this->input->post('mobile', true);
            $data['user_type'] = 2;
            $data['modified_at'] = date("Y-m-d H:i:s");
            $data['modified_by'] = $this->session->userdata('user_id');
            $this->db->where('pk_user_id', $id);
            $this->db->update('tbl_users', $data);
            $progres = array();
            $progres['account_setting'] = 10;     
            $this->db->where('fk_user_id', $id);
            $this->db->update('tbl_user_progresses', $progres);
            $this->session->set_flashdata('update_user', 'Account Updated Successfully!');
            redirect('user/account');
        }
    }
    
    public function update_basic_info() {
        $id = $this->input->post("pk_user_id");
        $this->form_validation->set_rules('resume_title', 'Resume Title', 'trim|required');
        $this->form_validation->set_rules('mother_name', 'Mother Name', 'trim|required');
        $this->form_validation->set_rules('date', 'Date of Birth', 'trim|required');
        $this->form_validation->set_rules('marital_status', 'Marital Status', 'trim|required');
        $this->form_validation->set_rules('nationality', 'Nationality', 'trim|required');
        $this->form_validation->set_rules('permanent_address', 'Permanent Address', 'trim|required');
        $this->form_validation->set_rules('present_city', 'present_city', 'trim|required');
        $this->form_validation->set_rules('current_career_level', 'Current Career Level', 'trim|required');
        $this->form_validation->set_rules('education_level', 'Education Level', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $user_id = $this->session->userdata('user_id');
            $data = array();
            $data['title'] = 'Dashboard';
            $data['all_resumes'] = $this->User_model->select_all_resumes();       
            $data['user_info'] = $this->User_model->select_user_info($user_id);
            $data['main'] = $this->load->view('website/basic_info', $data, true);
            $this->load->view('website/master', $data);
        }else{ 
            $data = array();
            /* Initialize Image Library */
            $config['upload_path']          = 'media_library/user_images/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1024';
            $config['max_width'] = '300';
            $config['max_height'] = '300';
            $config['remove_spaces'] = TRUE;
            $config['encrypt_name'] = TRUE;
            /* End of Initialize Image Library */
            $this->load->library('upload', $config);
            if($_FILES['profile_picture']['tmp_name']){
                /* Start Image Upload */
                if (!$this->upload->do_upload('profile_picture'))
                {
                    $this->session->set_flashdata('update_user', $this->upload->display_errors());
                    redirect('user/basic_info');
                }
                else
                {
                    $data['profile_picture'] = $this->upload->data('file_name');
                }
                /* End of Image Upload */
                /* Resize Image */
                $upload_data = $this->upload->data();
                $config['image_library'] = 'gd2';
                $config['source_image'] = $upload_data['full_path'];
                $config['create_thumb'] = TRUE;
                $config['maintain_ratio'] = FALSE;
                $config['width']         = 300;
                $config['height']       = 300;
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                $data['profile_picture_thumb'] = $this->upload->data('raw_name').'_thumb'.$this->upload->data('file_ext');
                /* End of Resize Image */
                /* Delete Previous Profile Image */
                $previous_image=$this->input->post('previous_profile_picture', true);
                unlink('media_library/user_images/'.$previous_image);
            }
            else{
                /* If User Does Not Change Profile Image */
                $data['profile_picture'] = $this->input->post('previous_profile_picture', true);
            }
            /* End of Upload Profile Image */
            $data['resume_title'] = $this->input->post('resume_title', true);        
            $data['father_name'] = $this->input->post('father_name', true);        
            $data['mother_name'] = $this->input->post('mother_name', true); 
            $data['date_of_birth'] = $this->input->post('date', true);
            $data['religion'] = $this->input->post('religion', true);        
            $data['marital_status'] = $this->input->post('marital_status', true);        
            $data['nationality'] = $this->input->post('nationality', true);        
            $data['permanent_address'] = $this->input->post('permanent_address', true);        
            $data['present_city'] = $this->input->post('present_city', true);        
            $data['current_career_level'] = $this->input->post('current_career_level', true);        
            $data['education_level'] = $this->input->post('education_level', true);        
            $this->db->where('pk_user_id', $id);
            $this->db->update('tbl_users', $data);
            $progres = array();
            $progres['basic_info'] = 30;     
            $this->db->where('fk_user_id', $id);
            $this->db->update('tbl_user_progresses', $progres);
            $this->session->set_flashdata('update_user', 'Basic Info Updated Successfully!');
            redirect('user/basic_info');
        }
    }
    
    public function summary() {
        $user_id = $this->session->userdata('user_id');
        $data = array();
        $data['title'] = 'Dashboard';
        $data['all_resumes'] = $this->User_model->select_all_resumes();       
        $data['user_info'] = $this->User_model->select_user_info($user_id);
        $data['main'] = $this->load->view('website/summary', $data, true);
        $this->load->view('website/master', $data);
    }
    
    public function update_summary_info() {
        $id = $this->input->post("pk_user_id");
        $this->form_validation->set_rules('summary', 'Summary', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $user_id = $this->session->userdata('user_id');
            $data = array();
            $data['title'] = 'Dashboard';
            $data['all_resumes'] = $this->User_model->select_all_resumes();       
            $data['user_info'] = $this->User_model->select_user_info($user_id);
            $data['main'] = $this->load->view('website/summary', $data, true);
            $this->load->view('website/master', $data);
        }else{
            $data = array();
            $data['summary'] = $this->input->post('summary', true);        
            $this->db->where('pk_user_id', $id);
            $this->db->update('tbl_users', $data);
            $progres = array();
            $progres['summary'] = 10;     
            $this->db->where('fk_user_id', $id);
            $this->db->update('tbl_user_progresses', $progres);
            $this->session->set_flashdata('update_user', 'Summary Updated Successfully!');
            redirect('user/summary');
        }
    }
    
    public function portfolio() {
        $user_id = $this->session->userdata('user_id');
        $data = array();
        $data['title'] = 'Dashboard';
        $data['all_resumes'] = $this->User_model->select_all_resumes();
        $data['portfolios'] = $this->User_model->select_portfolio_by_id($user_id);       
        $data['user_info'] = $this->User_model->select_user_info($user_id);
        $data['main'] = $this->load->view('website/portfolio', $data, true);
        $this->load->view('website/master', $data);
    }

    public function save_portfolio() {
        $user_id = $this->session->userdata('user_id');
        $this->form_validation->set_rules('name_1', 'Name', 'trim|required');
        $this->form_validation->set_rules('description_1', 'Description', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data = array();
            $data['title'] = 'Dashboard';
            $data['all_resumes'] = $this->User_model->select_all_resumes();
            $data['portfolios'] = $this->User_model->select_portfolio_by_id($user_id);       
            $data['user_info'] = $this->User_model->select_user_info($user_id);
            $data['main'] = $this->load->view('website/portfolio', $data, true);
            $this->load->view('website/master', $data);
        }else{
            $data = array();
            if($this->input->post('name_1', true)){
                $data['fk_user_id'] = $user_id;
                $data['name'] = $this->input->post('name_1', true);   
                $data['link'] = $this->input->post('link_1', true);
                $data['description'] = $this->input->post('description_1', true);
                $this->db->insert('tbl_portfolios', $data);
            }
            if($this->input->post('name_2', true)){
                $data['fk_user_id'] = $user_id;
                $data['name'] = $this->input->post('name_2', true);   
                $data['link'] = $this->input->post('link_2', true);
                $data['description'] = $this->input->post('description_2', true);
                $this->db->insert('tbl_portfolios', $data);
            }
            $progres = array();
            $progres['portfolio'] = 5;     
            $this->db->where('fk_user_id', $user_id);
            $this->db->update('tbl_user_progresses', $progres);
            $this->session->set_flashdata('update_user', 'Portfolio Saved Successfully!');
            redirect('user/portfolio');
        }
    }
    
    public function delete_portfolio($portfolio_id) {
        $user_id = $this->session->userdata('user_id');
        $this->db->where('fk_user_id', $user_id);
        $this->db->where('pk_portfolio_id', $portfolio_id);
        $this->db->delete('tbl_portfolios');
        $sql = "SELECT pk_portfolio_id FROM tbl_portfolios WHERE fk_user_id = '$user_id'";
        $query = $this->db->query($sql);
        $result = $query->result();
        if($result){
            $this->session->set_flashdata('update_user', 'Portfolio Deleted Successfully!');
            redirect('user/portfolio'); 
        }else{
            $progres = array();
            $progres['portfolio'] = 0;     
            $this->db->where('fk_user_id', $user_id);
            $this->db->update('tbl_user_progresses', $progres);
            $this->session->set_flashdata('update_user', 'Portfolio Deleted Successfully!');
            redirect('user/portfolio'); 
        }  
    }
    
    public function education() {
        $user_id = $this->session->userdata('user_id');
        $data = array();
        $data['title'] = 'Dashboard';   
        $data['all_resumes'] = $this->User_model->select_all_resumes();
        $data['all_educations'] = $this->User_model->select_all_educations($user_id);       
        $data['user_info'] = $this->User_model->select_user_info($user_id);
        $data['main'] = $this->load->view('website/education', $data, true);
        $this->load->view('website/master', $data);
    }
    
    public function save_education_info() {
        $user_id = $this->session->userdata('user_id');
        $this->form_validation->set_rules('certification_name', 'Certification Name', 'trim|required');
        $this->form_validation->set_rules('result', 'Result', 'trim|required');
        $this->form_validation->set_rules('year', 'Year', 'trim|required');
        $this->form_validation->set_rules('institute_name', 'Institute Name', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data = array();
            $data['title'] = 'Dashboard'; 
            $data['all_resumes'] = $this->User_model->select_all_resumes();
            $data['all_educations'] = $this->User_model->select_all_educations($user_id);       
            $data['user_info'] = $this->User_model->select_user_info($user_id);
            $data['main'] = $this->load->view('website/education', $data, true);
            $this->load->view('website/master', $data);
        }else{
            $grade_point = $this->input->post('grade_point', true);
            $out_of = $this->input->post('out_of', true);
            $result = $this->input->post('result', true);
            $data = array();
            $data['fk_user_id'] = $user_id;
            $data['certification_name'] = $this->input->post('certification_name', true);
            if($grade_point){
                $data['result'] = $result.' ('.$grade_point.') Out of ('.$out_of.')';
            }
            else{
                $data['result'] = $result;
            }
            $data['year'] = $this->input->post('year', true);
            $data['institute_name'] = $this->input->post('institute_name', true);
            $data['major'] = $this->input->post('major', true);
            $data['duration'] = $this->input->post('duration', true);
            $data['achievement_name'] = $this->input->post('achievement_name', true);
            $this->db->insert('tbl_educations', $data);
            $progres = array();
            $progres['education'] = 15;     
            $this->db->where('fk_user_id', $user_id);
            $this->db->update('tbl_user_progresses', $progres);
            $this->session->set_flashdata('update_user', 'Education Information Saved Successfully!');
            redirect('user/education');
        }   
    }
    
    public function delete_education($education_id) {
        $user_id = $this->session->userdata('user_id');
        $this->db->where('fk_user_id', $user_id);
        $this->db->where('pk_education_id', $education_id);
        $this->db->delete('tbl_educations');
        $sql = "SELECT pk_education_id FROM tbl_educations WHERE fk_user_id = '$user_id'";
        $query = $this->db->query($sql);
        $result = $query->result();
        if($result){
            $this->session->set_flashdata('update_user', 'Education Deleted Successfully!');
            redirect('user/education');
        }else{
            $progres = array();
            $progres['education'] = 0;     
            $this->db->where('fk_user_id', $user_id);
            $this->db->update('tbl_user_progresses', $progres);
            $this->session->set_flashdata('update_user', 'Education Deleted Successfully!');
            redirect('user/education'); 
        }
    }
    
    public function employment_history() {
        $user_id = $this->session->userdata('user_id');
        $data = array();
        $data['title'] = 'Dashboard';  
        $data['all_resumes'] = $this->User_model->select_all_resumes();
        $data['all_employments'] = $this->User_model->select_all_employments($user_id);       
        $data['user_info'] = $this->User_model->select_user_info($user_id);
        $data['main'] = $this->load->view('website/employment_history', $data, true);
        $this->load->view('website/master', $data);
    }
    
    public function save_employment_info() {
        $user_id = $this->session->userdata('user_id');
        $this->form_validation->set_rules('date', 'Start Date', 'trim|required');
        $this->form_validation->set_rules('date2', 'End Date', 'trim');
        $this->form_validation->set_rules('company_name', 'Company Name', 'trim|required');
        $this->form_validation->set_rules('designation', 'Designation', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data = array();
            $data['title'] = 'Dashboard';     
            $data['all_resumes'] = $this->User_model->select_all_resumes();
            $data['all_employments'] = $this->User_model->select_all_employments($user_id);       
            $data['user_info'] = $this->User_model->select_user_info($user_id);
            $data['main'] = $this->load->view('website/employment_history', $data, true);
            $this->load->view('website/master', $data);
        }else{
            $data = array();
            $data['fk_user_id'] = $user_id;
            $data['start_date'] = $this->input->post('date', true); 
            $continuing = $this->input->post('continuing', true);
            if($continuing){
                $data['end_date'] = NULL;
                $datetime1 = date_create($data['start_date']);
            }else{
                $data['end_date'] = $this->input->post('date2', true);
                $datetime1 = date_create($data['start_date']);
                $datetime2 = date_create($data['end_date']);
                $interval = date_diff($datetime1, $datetime2);
                $data['total_experience'] = $interval->y.' Year, '.$interval->m.' Months, '.$interval->d. ' Days'; 
            }
            $data['company_name'] = $this->input->post('company_name', true); 
            $data['designation'] = $this->input->post('designation', true); 
            $data['responsibilities'] = $this->input->post('responsibilities', true); 
            $this->db->insert('tbl_employments', $data);
            $progres = array();
            $progres['employment_history'] = 20;     
            $this->db->where('fk_user_id', $user_id);
            $this->db->update('tbl_user_progresses', $progres);
            $this->session->set_flashdata('update_user', 'Employment Information Saved Successfully!');
            redirect('user/employment_history');
        }
    }
    
    public function delete_employment_history($employment_history_id) {
        $user_id = $this->session->userdata('user_id');
        $this->db->where('fk_user_id', $user_id);
        $this->db->where('pk_employment_id', $employment_history_id);
        $this->db->delete('tbl_employments');
        $sql = "SELECT pk_employment_id FROM tbl_employments WHERE fk_user_id = '$user_id'";
        $query = $this->db->query($sql);
        $result = $query->result();
        if($result){
            $this->session->set_flashdata('update_user', 'Employment History Deleted Successfully!');
            redirect('user/employment_history');
        }else{
            $progres = array();
            $progres['employment_history'] = 0;     
            $this->db->where('fk_user_id', $user_id);
            $this->db->update('tbl_user_progresses', $progres);
            $this->session->set_flashdata('update_user', 'Employment History Deleted Successfully!');
            redirect('user/employment_history');
        }
    }
    
    public function certification() {
        $user_id = $this->session->userdata('user_id');
        $data = array();
        $data['title'] = 'Dashboard';     
        $data['all_resumes'] = $this->User_model->select_all_resumes();
        $data['all_certifications'] = $this->User_model->select_all_certifications($user_id);       
        $data['user_info'] = $this->User_model->select_user_info($user_id);
        $data['main'] = $this->load->view('website/certification', $data, true);
        $this->load->view('website/master', $data);
    }
    
    public function save_certification_info() {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('institute', 'Institute', 'trim|required');
        $this->form_validation->set_rules('period', 'Period', 'trim|required');
        $this->form_validation->set_rules('location', 'Location', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $user_id = $this->session->userdata('user_id');
            $data = array();
            $data['title'] = 'Dashboard';     
            $data['all_resumes'] = $this->User_model->select_all_resumes();
            $data['all_certifications'] = $this->User_model->select_all_certifications($user_id);       
            $data['user_info'] = $this->User_model->select_user_info($user_id);
            $data['main'] = $this->load->view('website/certification', $data, true);
            $this->load->view('website/master', $data);
        }else{
            $data = array();
            $data['fk_user_id'] = $this->session->userdata('user_id');
            $data['name'] = $this->input->post('name', true); 
            $data['institute'] = $this->input->post('institute', true); 
            $data['period'] = $this->input->post('period', true); 
            $data['location'] = $this->input->post('location', true);  
            $this->db->insert('tbl_certifications', $data);
            $this->session->set_flashdata('update_user', 'Certification Information Saved Successfully!');
            redirect('user/certification');
        }
    }
    
    public function delete_certification($certification_id) {
        $this->db->where('fk_user_id', $this->session->userdata('user_id'));
        $this->db->where('pk_certification_id', $certification_id);
        $this->db->delete('tbl_certifications');
        $this->session->set_flashdata('update_user', 'Certification Deleted Successfully!');
        redirect('user/certification');
    }
    
    public function professional_skills() {
        $user_id = $this->session->userdata('user_id');
        $data = array();
        $data['title'] = 'Dashboard';     
        $data['all_resumes'] = $this->User_model->select_all_resumes();
        $data['all_professional_skills'] = $this->User_model->select_all_professional_skills($user_id);       
        $data['user_info'] = $this->User_model->select_user_info($user_id);
        $data['main'] = $this->load->view('website/professional_skills', $data, true);
        $this->load->view('website/master', $data);
    }
    
    public function save_professional_skills() {
        $user_id = $this->session->userdata('user_id');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data = array();
            $data['title'] = 'Dashboard';     
            $data['all_professional_skills'] = $this->User_model->select_all_professional_skills($user_id);       
            $data['user_info'] = $this->User_model->select_user_info($user_id);
            $data['main'] = $this->load->view('website/professional_skills', $data, true);
            $this->load->view('website/master', $data);
        }else{
            $data = array();
            $data['fk_user_id'] = $user_id;
            $data['name'] = $this->input->post('name', true); 
            $data['description'] = $this->input->post('description', true);   
            $this->db->insert('tbl_professional_skills', $data);
            $progres = array();
            $progres['specialization'] = 2;     
            $this->db->where('fk_user_id', $user_id);
            $this->db->update('tbl_user_progresses', $progres);
            $this->session->set_flashdata('update_user', 'Professional Skills Information Saved Successfully!');
            redirect('user/professional_skills');
        }
    }
    
    public function delete_professional_skill($professional_skill_id) {
        $user_id = $this->session->userdata('user_id');
        $this->db->where('fk_user_id', $user_id);
        $this->db->where('pk_skill_id', $professional_skill_id);
        $this->db->delete('tbl_professional_skills');
        $sql = "SELECT pk_skill_id FROM tbl_professional_skills WHERE fk_user_id = '$user_id'";
        $query = $this->db->query($sql);
        $result = $query->result();
        if($result){
            $this->session->set_flashdata('update_user', 'Professional Skills Deleted Successfully!');
            redirect('user/professional_skills');
        }else{
            $progres = array();
            $progres['specialization'] = 0;     
            $this->db->where('fk_user_id', $user_id);
            $this->db->update('tbl_user_progresses', $progres);
            $this->session->set_flashdata('update_user', 'Professional Skills Deleted Successfully!');
            redirect('user/professional_skills');
        }
    }
    
    public function languages() {
        $user_id = $this->session->userdata('user_id');
        $data = array();
        $data['title'] = 'Dashboard';    
        $data['all_resumes'] = $this->User_model->select_all_resumes();
        $data['all_languages'] = $this->User_model->select_all_languages($user_id);       
        $data['user_info'] = $this->User_model->select_user_info($user_id);
        $data['main'] = $this->load->view('website/languages', $data, true);
        $this->load->view('website/master', $data);
    }
    
    public function save_language_info() {
        $user_id = $this->session->userdata('user_id');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data = array();
            $data['title'] = 'Dashboard';     
            $data['all_languages'] = $this->User_model->select_all_languages($user_id);       
            $data['user_info'] = $this->User_model->select_user_info($user_id);
            $data['main'] = $this->load->view('website/languages', $data, true);
            $this->load->view('website/master', $data);
        }else{
            $data = array();
            $data['fk_user_id'] = $user_id;
            $data['name'] = $this->input->post('name', true);  
            $data['reading'] = $this->input->post('reading', true);  
            $data['writhing'] = $this->input->post('writhing', true);  
            $data['speaking'] = $this->input->post('speaking', true);  
            $this->db->insert('tbl_languages', $data);
            $progres = array();
            $progres['language'] = 5;     
            $this->db->where('fk_user_id', $user_id);
            $this->db->update('tbl_user_progresses', $progres);
            $this->session->set_flashdata('update_user', 'Language Information Saved Successfully!');
            redirect('user/languages');
        }
    }
    
    public function delete_language($languages_id) {
        $user_id = $this->session->userdata('user_id');
        $this->db->where('fk_user_id', $user_id);
        $this->db->where('pk_language_id', $languages_id);
        $this->db->delete('tbl_languages');
        $sql = "SELECT pk_language_id FROM tbl_languages WHERE fk_user_id = '$user_id'";
        $query = $this->db->query($sql);
        $result = $query->result();
        if($result){
            $this->session->set_flashdata('update_user', 'Languages Deleted Successfully!');
            redirect('user/languages');
        }else{
            $progres = array();
            $progres['language'] = 0;     
            $this->db->where('fk_user_id', $user_id);
            $this->db->update('tbl_user_progresses', $progres);
            $this->session->set_flashdata('update_user', 'Languages Deleted Successfully!');
            redirect('user/languages');
        }
    }
    
    public function membership() {
        $user_id = $this->session->userdata('user_id');
        $data = array();
        $data['title'] = 'Dashboard';     
        $data['all_resumes'] = $this->User_model->select_all_resumes();
        $data['all_memberships'] = $this->User_model->select_all_memberships($user_id);       
        $data['user_info'] = $this->User_model->select_user_info($user_id);
        $data['main'] = $this->load->view('website/membership', $data, true);
        $this->load->view('website/master', $data);
    }
    
    public function save_membership_info() {
        $user_id = $this->session->userdata('user_id');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data = array();
            $data['title'] = 'Dashboard';     
            $data['all_memberships'] = $this->User_model->select_all_memberships($user_id);       
            $data['user_info'] = $this->User_model->select_user_info($user_id);
            $data['main'] = $this->load->view('website/membership', $data, true);
            $this->load->view('website/master', $data);
        }else{
            $data = array();
            $data['fk_user_id'] = $user_id;
            $data['name'] = $this->input->post('name', true); 
            $data['institute'] = $this->input->post('institute', true); 
            $data['expiry_date'] = $this->input->post('expiry_date', true); 
            $this->db->insert('tbl_memberships', $data);
            $this->session->set_flashdata('update_user', 'Membership Information Saved Successfully!');
            redirect('user/membership');
        }
    }
    
    public function delete_membership($membership_id) {
        $this->db->where('fk_user_id', $this->session->userdata('user_id'));
        $this->db->where('pk_membership_id', $membership_id);
        $this->db->delete('tbl_memberships');
        $this->session->set_flashdata('update_user', 'Membership Deleted Successfully!');
        redirect('user/membership');
    }
    
    public function honors_and_awards() {
        $user_id = $this->session->userdata('user_id');
        $data = array();
        $data['title'] = 'Dashboard';    
        $data['all_resumes'] = $this->User_model->select_all_resumes();
        $data['all_honors_and_awards'] = $this->User_model->select_all_honors_and_awards($user_id);       
        $data['user_info'] = $this->User_model->select_user_info($user_id);
        $data['main'] = $this->load->view('website/honors_and_awards', $data, true);
        $this->load->view('website/master', $data);
    }
    
    public function save_honors_and_awards_info() {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $user_id = $this->session->userdata('user_id');
            $data = array();
            $data['title'] = 'Dashboard';     
            $data['all_honors_and_awards'] = $this->User_model->select_all_honors_and_awards($user_id);       
            $data['user_info'] = $this->User_model->select_user_info($user_id);
            $data['main'] = $this->load->view('website/honors_and_awards', $data, true);
            $this->load->view('website/master', $data);
        }else{
            $data = array();
            $data['fk_user_id'] = $this->session->userdata('user_id');
            $data['name'] = $this->input->post('name', true); 
            $data['date'] = $this->input->post('date', true); 
            $this->db->insert('tbl_honors_and_awards', $data);
            $this->session->set_flashdata('update_user', 'Awards Information Saved Successfully!');
            redirect('user/honors_and_awards');
        }   
    }
    
    public function delete_honors_and_award($honors_and_awards_id) {
        $this->db->where('fk_user_id', $this->session->userdata('user_id'));
        $this->db->where('pk_award_id', $honors_and_awards_id);
        $this->db->delete('tbl_honors_and_awards');
        $this->session->set_flashdata('update_user', 'Honors and Awards Deleted Successfully!');
        redirect('user/honors_and_awards');
    }
    
    public function hobbies_and_interests() {
        $user_id = $this->session->userdata('user_id');
        $data = array();
        $data['title'] = 'Dashboard';     
        $data['all_resumes'] = $this->User_model->select_all_resumes();
        $data['all_hobbies_and_interests'] = $this->User_model->select_all_hobbies_and_interests($user_id);       
        $data['user_info'] = $this->User_model->select_user_info($user_id);
        $data['main'] = $this->load->view('website/hobbies_and_interests', $data, true);
        $this->load->view('website/master', $data);
    }
    
    public function save_hobbies_and_interests_info() {
        $user_id = $this->session->userdata('user_id');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data = array();
            $data['title'] = 'Dashboard';    
            $data['all_resumes'] = $this->User_model->select_all_resumes();
            $data['all_hobbies_and_interests'] = $this->User_model->select_all_hobbies_and_interests($user_id);       
            $data['user_info'] = $this->User_model->select_user_info($user_id);
            $data['main'] = $this->load->view('website/hobbies_and_interests', $data, true);
            $this->load->view('website/master', $data);
        }else{
            $data = array();
            $data['fk_user_id'] = $user_id;
            $data['name'] = $this->input->post('name', true); 
            $data['description'] = $this->input->post('description', true); 
            $this->db->insert('tbl_hobbies_and_interests', $data);
            $progres = array();
            $progres['hobbies_and_interest'] = 2;     
            $this->db->where('fk_user_id', $user_id);
            $this->db->update('tbl_user_progresses', $progres);
            $this->session->set_flashdata('update_user', 'Hobbies Information Saved Successfully!');
            redirect('user/hobbies_and_interests');
        }
    }
    
    public function delete_hobbies_and_interest($hobbies_and_interests_id) {
        $user_id = $this->session->userdata('user_id');
        $this->db->where('fk_user_id', $user_id);
        $this->db->where('pk_interest_id', $hobbies_and_interests_id);
        $this->db->delete('tbl_hobbies_and_interests');
        $sql = "SELECT pk_interest_id FROM tbl_hobbies_and_interests WHERE fk_user_id = '$user_id'";
        $query = $this->db->query($sql);
        $result = $query->result();
        if($result){
            $this->session->set_flashdata('update_user', 'Hobbies And Interests Deleted Successfully!');
            redirect('user/hobbies_and_interests');
        }else{
            $progres = array();
            $progres['hobbies_and_interest'] = 0;     
            $this->db->where('fk_user_id', $user_id);
            $this->db->update('tbl_user_progresses', $progres);
            $this->session->set_flashdata('update_user', 'Hobbies And Interests Deleted Successfully!');
            redirect('user/hobbies_and_interests');
        }
    }
    
    public function references() {
        $user_id = $this->session->userdata('user_id');
        $data = array();
        $data['title'] = 'Dashboard';
        $data['all_resumes'] = $this->User_model->select_all_resumes();
        $data['all_referencess'] = $this->User_model->select_all_references($user_id);       
        $data['user_info'] = $this->User_model->select_user_info($user_id);
        $data['main'] = $this->load->view('website/references', $data, true);
        $this->load->view('website/master', $data);
    }
    
    public function save_references_info() {
        $user_id = $this->session->userdata('user_id');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('organization', 'Organization', 'trim|required');
        $this->form_validation->set_rules('designation', 'Designation', 'trim|required');
        $this->form_validation->set_rules('relation', 'Relation', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $data = array();
            $data['title'] = 'Dashboard'; 
            $data['all_resumes'] = $this->User_model->select_all_resumes();
            $data['all_referencess'] = $this->User_model->select_all_references($user_id);       
            $data['user_info'] = $this->User_model->select_user_info($user_id);
            $data['main'] = $this->load->view('website/references', $data, true);
            $this->load->view('website/master', $data);
        }else{
            $data = array();
            $data['fk_user_id'] = $user_id;
            $data['name'] = $this->input->post('name', true); 
            $data['organization'] = $this->input->post('organization', true); 
            $data['designation'] = $this->input->post('designation', true); 
            $data['mobile_office'] = $this->input->post('mobile_office', true);  
            $data['mobile_home'] = $this->input->post('mobile_home', true);  
            $data['email'] = $this->input->post('email', true);  
            $data['address'] = $this->input->post('address', true);  
            $data['relation'] = $this->input->post('relation', true);  
            $this->db->insert('tbl_references', $data);
            $progres = array();
            $progres['reference'] = 1;     
            $this->db->where('fk_user_id', $user_id);
            $this->db->update('tbl_user_progresses', $progres);
            $this->session->set_flashdata('update_user', 'Reference Information Saved Successfully!');
            redirect('user/references');   
        }
    }
    
    public function delete_reference($references_id) {
        $user_id = $this->session->userdata('user_id');
        $this->db->where('fk_user_id', $user_id);
        $this->db->where('pk_reference_id', $references_id);
        $this->db->delete('tbl_references');
        $sql = "SELECT pk_reference_id FROM tbl_references WHERE fk_user_id = '$user_id'";
        $query = $this->db->query($sql);
        $result = $query->result();
        if($result){
            $this->session->set_flashdata('update_user', 'References Deleted Successfully!');
            redirect('user/references');
        }else{
            $progres = array();
            $progres['reference'] = 0;     
            $this->db->where('fk_user_id', $user_id);
            $this->db->update('tbl_user_progresses', $progres);
            $this->session->set_flashdata('update_user', 'References Deleted Successfully!');
            redirect('user/references');
        }
    }
    
    public function download_CV() {
        $user_id = $this->session->userdata('user_id');
        $sql = "SELECT * FROM tbl_users WHERE pk_user_id = '$user_id'";
        $resume = $this->db->query($sql);
        $result = $resume->row_array();        
        if ($result) {
            foreach ($result as $experiences) {
                $sql = "SELECT * FROM tbl_employments WHERE fk_user_id = '$user_id'";
                $query = $this->db->query($sql);
                $experiences = $query->result('array');
                $result['experiences'] = $experiences;
            }
        }
        if ($result) {
            foreach ($result as $educations) {
                $sql = "SELECT * FROM tbl_educations WHERE fk_user_id = '$user_id'";
                $query = $this->db->query($sql);
                $educations = $query->result('array');
                $result['educations'] = $educations;
            }
        }
        if ($result) {
            foreach ($result as $certifications) {
                $sql = "SELECT * FROM tbl_certifications WHERE fk_user_id = '$user_id'";
                $query = $this->db->query($sql);
                $certifications = $query->result('array');
                $result['certifications'] = $certifications;
            }
        }
        if ($result) {
            foreach ($result as $skills) {
                $sql = "SELECT * FROM tbl_professional_skills WHERE fk_user_id = '$user_id'";
                $query = $this->db->query($sql);
                $skills = $query->result('array');
                $result['skills'] = $skills;
            }
        }
        if ($result) {
            foreach ($result as $portfolios) {
                $sql = "SELECT * FROM tbl_portfolios WHERE fk_user_id = '$user_id'";
                $query = $this->db->query($sql);
                $portfolios = $query->result('array');
                $result['portfolios'] = $portfolios;
            }
        }
        if ($result) {
            foreach ($result as $languages) {
                $sql = "SELECT * FROM tbl_languages WHERE fk_user_id = '$user_id'";
                $query = $this->db->query($sql);
                $languages = $query->result('array');
                $result['languages'] = $languages;
            }
        }
        if ($result) {
            foreach ($result as $memberships) {
                $sql = "SELECT * FROM tbl_memberships WHERE fk_user_id = '$user_id'";
                $query = $this->db->query($sql);
                $memberships = $query->result('array');
                $result['memberships'] = $memberships;
            }
        }
        if ($result) {
            foreach ($result as $hobbies_and_interests) {
                $sql = "SELECT * FROM tbl_hobbies_and_interests WHERE fk_user_id = '$user_id'";
                $query = $this->db->query($sql);
                $hobbies_and_interests = $query->result('array');
                $result['hobbies_and_interests'] = $hobbies_and_interests;
            }
        }if ($result) {
            foreach ($result as $honors_and_awards) {
                $sql = "SELECT * FROM tbl_honors_and_awards WHERE fk_user_id = '$user_id'";
                $query = $this->db->query($sql);
                $honors_and_awards = $query->result('array');
                $result['honors_and_awards'] = $honors_and_awards;
            }
        }
        $this->load->library('Pdf');
        $data = array();
        $data['resume_details'] = $result;
        $this->load->view('website/download_CV', $data);
    }
}
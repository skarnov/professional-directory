<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {
    
    public function main() {
        $sql = "SELECT * FROM tbl_users ORDER BY pk_user_id DESC LIMIT 5";
        $query_result = $this->db->query($sql);
        $result = $query_result->result('array');
        if ($result) {
            foreach ($result as $i => $resume) {
                $sql = "SELECT name FROM tbl_resumes WHERE pk_resume_id = '" . $resume['fk_resume_id'] . "'";
                $resume = $this->db->query($sql);
                $metaData = $resume->row_array();
                $result[$i]['resume'] = $metaData['name'];
            }
        }        
        $data = array();
        $data['title'] = 'Proffbd';
        $data['all_resumes'] = $this->User_model->select_all_resumes();
        $data['top_resume'] = $result;
        $data['footer'] = $this->load->view('website/footer', $data, true);
        $this->load->view('website/home', $data);
    }
    
    public function search_resume() { 
        $searchPram = $this->input->post('search', true);
        $resume = $this->input->post('resume', true);
        if($this->input->post('search')) {
            redirect('cms/search_resume');
        }
        $sql = "SELECT * FROM tbl_users AS u, tbl_resumes AS r WHERE u.fk_resume_id = r.pk_resume_id AND u.present_city LIKE '%$searchPram%' AND r.name LIKE '%$resume%'";
        $query_result = $this->db->query($sql);
        $result = $query_result->result('array');
        if ($result) {
            foreach ($result as $i => $resume) {
                $sql = "SELECT name FROM tbl_resumes WHERE pk_resume_id = '" . $resume['fk_resume_id'] . "'";
                $resume = $this->db->query($sql);
                $metaData = $resume->row_array();
                $result[$i]['resume'] = $metaData['name'];
            }
        }
        if ($result) {
            foreach ($result as $i => $resume) {
                $sql = "SELECT company_name FROM tbl_employments WHERE fk_user_id = '" . $resume['pk_user_id'] . "' ORDER BY pk_employment_id DESC LIMIT 1";
                $resume = $this->db->query($sql);
                $metaData = $resume->row_array();
                $result[$i]['employment'] = $metaData['company_name'];
            }
        }
        if ($result) {
            foreach ($result as $i => $resume) {
                $sql = "SELECT name FROM tbl_professional_skills WHERE fk_user_id = '" . $resume['pk_user_id'] . "'";                
                $skill = $this->db->query($sql);
                $skill_array = $skill->result('array');
                $result[$i]['skills'] = $skill_array;
            }
        } 
        $data = array();
        $data['title'] = 'Search Resume';
        $data['search'] = $searchPram;
        $data['search_result'] = $result;
        $data['all_skills'] = $this->User_model->select_all_skills();
        $data['all_resumes'] = $this->User_model->select_all_resumes();
        $data['main'] = $this->load->view('website/search_resume', $data, true);
        $this->load->view('website/master', $data);
    }
    
    public function search_filter($skill_id) {
        $sql = "SELECT * FROM tbl_professional_skills WHERE pk_skill_id = '$skill_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->result('array');
        if ($result) {
            foreach ($result as $i => $resume) {
                $sql = "SELECT * FROM tbl_users WHERE pk_user_id = '".$resume['fk_user_id']."'";
                $resume = $this->db->query($sql);
                $metaData = $resume->result('array');
                $result[$i]['user'] = $metaData;
            }
        }
        if ($result) {
            foreach ($result as $i => $resume) {
                $sql = "SELECT name FROM tbl_resumes WHERE pk_resume_id = '" . $resume['fk_user_id'] . "'";
                $resume = $this->db->query($sql);
                $metaData = $resume->row_array();
                $result[$i]['resume'] = $metaData['name'];
            }
        }
        if ($result) {
            foreach ($result as $i => $resume) {
                $sql = "SELECT company_name FROM tbl_employments WHERE fk_user_id = '" . $resume['fk_user_id'] . "' ORDER BY pk_employment_id DESC LIMIT 1";
                $resume = $this->db->query($sql);
                $metaData = $resume->row_array();
                $result[$i]['employment'] = $metaData['company_name'];
            }
        }
        if ($result) {
            foreach ($result as $i => $resume) {
                $sql = "SELECT name FROM tbl_professional_skills WHERE fk_user_id = '" . $resume['fk_user_id'] . "'";                
                $skill = $this->db->query($sql);
                $skill_array = $skill->result('array');
                $result[$i]['skills'] = $skill_array;
            }
        }
        $data = array();
        $data['title'] = 'Search Resume';
        $data['search_result'] = $result;
        $data['all_skills'] = $this->User_model->select_all_skills();
        $this->load->view('website/search_filter', $data);
    }
    
    public function view_profile($user_id){
        $logged_id = $this->session->userdata('user_id');
        if($logged_id){
            $update_counter = "UPDATE tbl_users SET view_counter = (view_counter + 1) WHERE pk_user_id = '$user_id' AND NOT pk_user_id = '$logged_id'";             
            $this->db->query($update_counter);
        }
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
        $data = array();
        $data['title'] = $result['first_name'].' '.$result['last_name'];
        $data['resume'] = $result; 
        $data['all_resumes'] = $this->User_model->select_all_resumes();
        $data['main'] = $this->load->view('website/resume_details', $data, true);
        $this->load->view('website/master', $data); 
    }
}
<?php

class User_model extends CI_Model {
   
    public function send_email_verification_link($generated_PIN, $email) {
        $this->load->library('email');
        $this->email->from('support@proffbd.com', 'Proffbd');
        $this->email->to($email);
        $this->email->subject('Proffbd - Account Verification');
        $this->email->message('Your Email Verification Code is: '.$generated_PIN.' To Verify Your Proffbd Account. Please Enter This Code Link Below. '.base_url().'home/user_verification');        
        $this->email->send();
    }
    
    public function count_user_progress_for_the_user($user_id) {
        $total_progress = "SELECT SUM(account_setting+basic_info+summary+portfolio+education+employment_history+specialization+language+hobbies_and_interest+reference) AS total_progress FROM tbl_user_progresses WHERE fk_user_id = '$user_id'";
        $query = $this->db->query($total_progress);
        $user_progress = $query->row()->total_progress;
        $update = "UPDATE tbl_users SET user_progress = '$user_progress' WHERE pk_user_id = '$user_id'";
        $this->db->query($update);
        $sql = "SELECT user_progress FROM tbl_users WHERE pk_user_id = '$user_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row()->user_progress;
        return $result;
    }
    
    public function generate_PIN($digits = 6){
        $i = 0; //counter
        $pin = ""; //our default pin is blank.
        while($i < $digits){
            //generate a random number between 0 and 9.
            $pin .= mt_rand(0, 9);
            $i++;
        }
        return $pin;
    }
    
    public function ensure_one_email_for_one_password($email){
        $sql = "UPDATE tbl_password_change_requests SET status = 0, modified_at = '" . date("Y-m-d H:i:s") . "' WHERE property='$email'";
        $this->db->query($sql);  
    }
    
    public function send_email($generated_PIN, $email){
        $this->load->library('email');
        $this->email->from('support@proffbd.com', 'Proffbd');
        $this->email->to($email);
        $this->email->subject('Proffbd - Forgot Email');
        $this->email->message('Random Password is: '.$generated_PIN. base_url().'home/change_password');        
        $this->email->send();
    }
    
    public function select_all_resumes() {
        $sql = "SELECT * FROM tbl_resumes";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_user_info($user_id) {
        $sql = "SELECT * FROM tbl_users WHERE pk_user_id = '$user_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
    
    public function select_portfolio_by_id($user_id) {
        $sql = "SELECT * FROM tbl_portfolios WHERE fk_user_id = '$user_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_educations($user_id) {
        $sql = "SELECT * FROM tbl_educations WHERE fk_user_id = '$user_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_employments($user_id) {
        $sql = "SELECT * FROM tbl_employments WHERE fk_user_id = '$user_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_certifications($user_id) {
        $sql = "SELECT * FROM tbl_certifications WHERE fk_user_id = '$user_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_professional_skills($user_id) {
        $sql = "SELECT * FROM tbl_professional_skills WHERE fk_user_id = '$user_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_skills() {
        $sql = "SELECT * FROM tbl_professional_skills";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_languages($user_id) {
        $sql = "SELECT * FROM tbl_languages WHERE fk_user_id = '$user_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_memberships($user_id) {
        $sql = "SELECT * FROM tbl_memberships WHERE fk_user_id = '$user_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_honors_and_awards($user_id) {
        $sql = "SELECT * FROM tbl_honors_and_awards WHERE fk_user_id = '$user_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_hobbies_and_interests($user_id) {
        $sql = "SELECT * FROM tbl_hobbies_and_interests WHERE fk_user_id = '$user_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_references($user_id) {
        $sql = "SELECT * FROM tbl_references WHERE fk_user_id = '$user_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
}
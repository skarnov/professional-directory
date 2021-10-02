<?php

class Page_404 extends CI_Controller {
    public function index() {
        $this->load->view('errors/404');
    }
}
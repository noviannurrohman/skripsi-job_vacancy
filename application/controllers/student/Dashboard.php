<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // if(empty($this->session->userdata('nim'))){
        //     redirect('student/login');
        // }
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['role'] = 1;  
        $this->load->view('layout/header', $data);
        $this->load->view('student/index');
        $this->load->view('layout/footer');
    }
}
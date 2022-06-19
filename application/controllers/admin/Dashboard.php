<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(empty($this->session->userdata('status'))){
            redirect('admin/login');
        }
        $this->load->library('form_validation');
        $this->load->model('Base_Model','Base');
    }

    public function index()
    {           
        $data['jobs'] = $this->Base->getTable('pekerjaan');
        $data['company'] = $this->Base->getTable('perusahaan');
        $data['student'] = $this->Base->getTable('mahasiswa');
        $this->load->view('admin/layout/header');
        $this->load->view('admin/index', $data);
        $this->load->view('admin/layout/footer');
    }

    /*public function auth()
    {
        $data['role'] = 1;  
        $this->load->view('headfoot/header', $data);
        $this->load->view('dashboard/index');
        $this->load->view('headfoot/footer');
    }*/
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if(empty($this->session->userdata('username'))){
            redirect('company/login');
        }
        $this->load->library('form_validation');
        $this->load->model('M_Company','Company');
    }

    public function index()
    {         
        $data['applicant'] = $this->Company->joinApplicant(['perusahaan.id' => $this->session->userdata('id_perusahaan')])->num_rows();
        $data['jobs'] = $this->Company->getJob('pekerjaan', ['id_perusahaan' => $this->session->userdata('id_perusahaan')]);
        $data['student'] = $this->Company->getStudent('mahasiswa');
        $this->session->set_userdata('companyLog', 'perusahaan');
        $this->load->view('company/layout/header');
        $this->load->view('company/index', $data);
        $this->load->view('company/layout/footer');
    }
}
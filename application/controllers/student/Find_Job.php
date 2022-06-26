<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Find_Job extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_Student','Student');
        // if ($this->session->userdata['logged'] == TRUE)
        // {
        //     //do something
        // }
        // else
        // {
        //     redirect('student/login'); //if session is not there, redirect to login page
        // }
    }

    public function index()
    {         
        //$where = '3';
        $data['skill'] = $this->Student->getTable('skill');
        $this->load->view('layout/header');
        $this->load->view('student/find_job', $data);
        //$this->load->view('layout/footer');
    }

    public function list_job()
    {
        //$where = '2';
        $where = $this->input->post('id_skill');
        $data['findjob'] = $this->Student->getListJob($where);
        //echo json_encode($data);
        echo $data['findjob'];
    }

    public function filter()
    {
        // $id_skill = ($this->input->post('id_skill') == null) ? null : "pekerjaan.id_skill LIKE '%".$this->input->post('id_skill')."%'";
        // $jenis_pekerjaan = ($this->input->post('jenis_pekerjaan') == null) ? " " : " && pekerjaan.jenis_pekerjaan = ".$this->input->post('jenis_pekerjaan');
        // $lokasi = ($this->input->post('lokasi') == null) ? " " : " && pekerjaan.lokasi = ".$this->input->post('lokasi');
        //$where = $id_skill . $jenis_pekerjaan . $lokasi;
        // $where = $this->input->post('id_skill');
        // // [
        // //     'id_skill' => $this->input->post('id_skill'),
        // //     // 'jenis_pekerjaan' => $this->input->post('jenis_pekerjaan'),
        // //     // 'lokasi' => $this->input->post('lokasi')
        // // ];
        // $data['findjob'] = $this->Student->getListJob($where);
        // //echo json_encode($where);
        // echo json_encode($data['findjob']);
        $where = null;
        
        //$where = '2';
        if ($this->input->post('id_skill') != '' && $this->input->post('jenis_pekerjaan') != '' && $this->input->post('lokasi') != '') {
            $where = $this->input->post('id_skill') . '&&' . $this->input->post('jenis_pekerjaan') . '&&' . $this->input->post('lokasi');
        }elseif ($this->input->post('id_skill') != '' && $this->input->post('jenis_pekerjaan') != '' && $this->input->post('lokasi') == '') {
            $where = $this->input->post('id_skill') . '&&' . $this->input->post('jenis_pekerjaan');
        }elseif ($this->input->post('id_skill') != '' && $this->input->post('jenis_pekerjaan') == '' && $this->input->post('lokasi') != '') {
            $where = $this->input->post('id_skill') . '&&' . $this->input->post('lokasi');
        }elseif ($this->input->post('id_skill') == '' && $this->input->post('jenis_pekerjaan') != '' && $this->input->post('lokasi') != '') {
            $where = $this->input->post('jenis_pekerjaan') . '&&' . $this->input->post('lokasi');
        }elseif ($this->input->post('id_skill') != '' && $this->input->post('jenis_pekerjaan') == '' && $this->input->post('lokasi') == '') {
            $where = $this->input->post('id_skill');
        }elseif ($this->input->post('id_skill') == '' && $this->input->post('jenis_pekerjaan') != '' && $this->input->post('lokasi') == '') {
            $where = $this->input->post('jenis_pekerjaan');
        }elseif ($this->input->post('id_skill') == '' && $this->input->post('jenis_pekerjaan') == '' && $this->input->post('lokasi') != '') {
            $where = $this->input->post('lokasi');
        }
        //$where = $this->input->post('id_skill') . $this->input->post('jenis_pekerjaan') . $this->input->post('lokasi');
        if ($where == '') {
            $data['findjob'] = $this->Student->getListJob();
        }else {
            $data['findjob'] = $this->Student->getListJob($where);
        }
        //echo $where;
        echo $data['findjob'];
    }

    public function Detail_job($id)
    {
        $where = [
            'pekerjaan.id' => $id
        ];
        $wherepl = [
            'id_mahasiswa' => $this->session->userdata('id'),
            'id_pekerjaan' => $id
        ];
        $data['findjobs'] = $this->Student->getPekerjaan('pekerjaan', 'id ='. $id);
        $data['findjob'] = $this->Student->joinJob($where)->result_array();
        $data['jml_pelamar'] = $this->Student->getPelamar('pelamar', $wherepl)->num_rows();
        $pelamar_null = ["status_daftar" => "did not pass"];
        $data['pelamar'] = ($data['jml_pelamar'] == 0) ? $pelamar_null : $this->Student->getPelamar('pelamar', $wherepl)->result_array()[0];
        $this->load->view('layout/header');
        $this->load->view('student/job_detail', $data, $wherepl);
        //echo json_encode($data['pelamar']);
    }

    public function Melamar()
    {
        $input_data = [
            'id_pekerjaan'                  => $this->input->post('id_pekerjaan'),
            'id_mahasiswa'                  => $this->input->post('id_mahasiswa'),
            'id_perusahaan'                 => $this->input->post('id_perusahaan'),
        ];

        if ($this->Student->insert('pelamar', $input_data)) {
            //set_pesan('data saved successfully.', 'company/job_list');
            //echo $this->input->post('id_skill');
        } else {
            //set_pesan('data failed to save.', 'company/job_list');
            //echo $this->input->post('id_skill');
        }
    }
}
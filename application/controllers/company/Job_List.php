<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_List extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_Company','Company');
        $this->load->model('Base_Model','Base');
    }

    public function index()
    {           
        // $data['users'] = $this->Company->getCompany("perusahaan");
        $data['jobs'] = $this->Company->getJob('pekerjaan', ['id_perusahaan' => $this->session->userdata('id_perusahaan')]);
        $data['skills'] = $this->Base->getTable("skill");
        $this->load->view('company/layout/header');
        $this->load->view('company/joblist/index', $data);
    }

    private function _validasi($mode)
    {
        $this->form_validation->set_rules('nama_pekerjaan', 'Nama Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required|trim');
        $this->form_validation->set_rules('kualifikasi', 'Kualifikasi', 'required|trim');
        $this->form_validation->set_rules('deskripsi_pekerjaan', 'Deskripsi  Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('tingkat_pekerjaan', 'Tingkat  Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('jenis_pekerjaan', 'Jenis Pekerjaan', 'required|trim');
        //$this->form_validation->set_rules('id_skill', 'Id Skill', 'required|trim');
        $this->form_validation->set_rules('application_date', 'Application Date', 'required|trim');

        if ($mode == 'add') {
            $this->form_validation->set_rules('nama_pekerjaan', 'Nama Pekerjaan', 'required|trim');
            $this->form_validation->set_rules('lokasi', 'Lokasi', 'required|trim');
            $this->form_validation->set_rules('kualifikasi', 'Kualifikasi', 'required|trim');
            $this->form_validation->set_rules('deskripsi_pekerjaan', 'Deskripsi  Pekerjaan', 'required|trim');
            $this->form_validation->set_rules('tingkat_pekerjaan', 'Tingkat  Pekerjaan', 'required|trim');
            $this->form_validation->set_rules('jenis_pekerjaan', 'Jenis Pekerjaan', 'required|trim');
            //$this->form_validation->set_rules('id_skill', 'Id Skill', 'required|trim');
            $this->form_validation->set_rules('application_date', 'Application Date', 'required|trim');
        } else {
            $db = $this->Company->getJob('pekerjaan', ['id' => $this->session->userdata('id_perusahaan')]);
            $nama_pekerjaan = $this->input->post('nama_pekerjaan', true);
            $lokasi = $this->input->post('lokasi', true);
            $deskripsi_pekerjaan = $this->input->post('deskripsi_pekerjaan', true);
            $tingkat_pekerjaan = $this->input->post('tingkat_pekerjaan', true);
            $jenis_pekerjaan = $this->input->post('jenis_pekerjaan', true);
            //$idskill = $this->input->post('id_skill', true);
            $application_date = $this->input->post('application_date', true);

            $this->form_validation->set_rules('nama_pekerjaan', 'Nama Pekerjaan', 'required|trim');
        }
    }

    public function add()
    {
        $this->_validasi('add');
        $id_skill = null;

        $input = $this->input->post(null, true);
        //$values = $_POST['ary'];
        $values = $_POST['id_skill'];

        foreach ($values as $a){
            $id_skill = $id_skill.",".$a;
        }
        $id_skill1 = substr($id_skill, 1);
        $input_data = [
            'nama_pekerjaan'                => $this->input->post('nama_pekerjaan'),
            'lokasi'                        => $this->input->post('lokasi'),
            'posted_date'                   => date("Y/m/d"),
            'deskripsi_pekerjaan'           => $this->input->post('deskripsi_pekerjaan'),
            'tingkat_pekerjaan'             => $this->input->post('tingkat_pekerjaan'),
            'jenis_pekerjaan'               => $this->input->post('jenis_pekerjaan'),
            'id_skill'                      => $id_skill1,
            'application_date'              => $this->input->post('application_date'),
            'id_perusahaan'                 => $this->session->userdata('id_perusahaan'),
        ];

        if ($this->Company->insert('pekerjaan', $input_data)) {
            set_pesan('data saved successfully.', 'company/job_list');
            //echo $this->input->post('id_skill');
        } else {
            set_pesan('data failed to save.', 'company/job_list');
            //echo $this->input->post('id_skill');
        }

        // if ($this->form_validation->run() == false) {
        //     // $data['title'] = "Tambah User";
        //     //redirect(base_url("company/job_list/"));
        //     //print_r($this->input->post('id_skill'));
        //     echo "masih error";
        // } else {
            
        // }
    }

    public function detail_job($id)
    {
        // $data['title'] = "Edit Company";
        $where = [
            'pekerjaan.id' => $id
        ];
        $data['job'] = $this->Base->joinJob($where)->result();
        $data['skill'] = $this->Base->joinSkill($where)->result();
        $this->load->view('company/layout/header');
        $this->load->view('company/joblist/detail_job', $data);
        $this->load->view('company/layout/footer');
    }

    public function edit_job($id)
    {
        //$data['title'] = "Edit Student";
        //$data['pekerjaan'] = $this->Base->getJob('pekerjaan', ['id' => $id]);
        $where = [
            'pekerjaan.id' => $id
        ];
        $data['jobs'] = $this->Company->getJob('pekerjaan', ['id_perusahaan' => $this->session->userdata('id_perusahaan')]);
        $data['job'] = $this->Company->joinJob($where)->result();
        $data['skills'] = $this->Company->getTable("skill");
        $this->load->view('company/layout/header');
        $this->load->view('company/joblist/edit_job', $data);
    }

    public function delete($id)
    {
        if ($this->Company->delete('pekerjaan', ['id' => $id])) {
            set_pesan('data failed to delete.', 'company/job_list');
        } else {
            set_pesan('data deleted successfully.','company/job_list');
        }
        // redirect('company/job_list');
    }

    public function edit($id){
        $this->_validasi('edit');
        $id_skill = null;

        $values = $_POST['id_skill'];

        foreach ($values as $a){
            $id_skill = $id_skill.",".$a;
        }
        $id_skill1 = substr($id_skill, 1);
        $input = $this->input->post(null, true);
        $input_data = [
            'nama_pekerjaan'                => $this->input->post('nama_pekerjaan'),
            'lokasi'                        => $this->input->post('lokasi'),
            'deskripsi_pekerjaan'           => $this->input->post('deskripsi_pekerjaan'),
            'tingkat_pekerjaan'             => $this->input->post('tingkat_pekerjaan'),
            'jenis_pekerjaan'               => $this->input->post('jenis_pekerjaan'),
            'id_skill'                      => $id_skill1,
            'application_date'              => $this->input->post('application_date'),
        ];

        if ($this->Company->update('pekerjaan', 'id', $id, $input_data)) {
            set_pesan('data changed successfully.', 'company/job_list');
        } else {
            set_pesan('data failed to change.', 'company/job_list/edit_job/'.$id);
        }
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller {

    public function __construct()
    {

        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Base_Model','Base');
    }

    public function index()
    {           
        $data['job'] = $this->Base->joinJob()->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/job/index', $data);
        $this->load->view('admin/layout/footer');
    }

    public function detail_job($id)
    {
        // $data['title'] = "Edit Company";
        $where = [
            'pekerjaan.id' => $id
        ];
        $data['job'] = $this->Base->joinJob($where)->result();
        $data['skill'] = $this->Base->joinSkill($where)->result();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/job/detail_job', $data);
        $this->load->view('admin/layout/footer');
    }

    public function delete($id)
    {
        if ($this->Base->delete('pekerjaan', ['id' => $id])) {
            set_pesan('data failed to delete.', 'admin/job');
        } else {
            set_pesan('data deleted successfully.','admin/job');
        }
        // redirect('admin/job');
    }
}
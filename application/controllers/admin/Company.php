<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Base_Model','Base');
    }

    public function index()
    {           
        $data['users'] = $this->Base->getCompany("perusahaan");
        $this->load->view('admin/layout/header');
        $this->load->view('admin/company/index', $data);
        $this->load->view('admin/layout/footer');
    }

    private function _validasi($mode)
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('nama_instansi', 'Nama_Instansi', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('no_telp', 'No_telp', 'required|trim');
        $this->form_validation->set_rules('fax', 'Fax', 'required|trim');
        $this->form_validation->set_rules('website', 'Website', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($mode == 'add') {
            $this->form_validation->set_rules('username', 'Username', 'required|trim');
            $this->form_validation->set_rules('nama_instansi', 'Nama_Instansi', 'required|trim');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim');
            $this->form_validation->set_rules('no_telp', 'No_telp', 'required|trim');
            $this->form_validation->set_rules('fax', 'Fax', 'required|trim');
            $this->form_validation->set_rules('website', 'Website', 'required|trim');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');

        } else {
            $db = $this->Base->get('perusahaan', ['id' => $this->input->post('id', true)]);
            $username = $this->input->post('username', true);
            $nama_instansi = $this->input->post('nama_instansi', true);
            $alamat = $this->input->post('alamat', true);
            $email = $this->input->post('email', true);
            $no_telp = $this->input->post('no_telp', true);
            $fax = $this->input->post('fax', true);
            $website = $this->input->post('website', true);
            $deskripsi = $this->input->post('deskripsi', true);
            $password = $this->input->post('password', true);

            $this->form_validation->set_rules('username', 'Username', 'required|trim', '|is_unique[perusahaan.username]');
        }
    }

    public function add()
    {
        $this->_validasi('add');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah User";
            redirect(base_url("admin/company/add"));
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'username'               => $this->input->post('username'),
                'nama_instansi'              => $this->input->post('nama_instansi'),
                'alamat'            => $this->input->post('alamat'),
                'email'             => $this->input->post('email'),
                'no_telp'           => $this->input->post('no_telp'),
                'fax'           => $this->input->post('fax'),
                'website'     => $this->input->post('website'),
                'deskripsi'               => $this->input->post('deskripsi'),
                'foto'               =>  'default.png',
                'password'          => md5($this->input->post('password'))
            ];

            if ($this->Base->insert('perusahaan', $input_data)) {
                set_pesan('data saved successfully. Please click the activation button to activate User.', 'admin/company');
            } else {
                set_pesan('data failed to save.', 'admin/company');
            }
        }
    }

    public function delete($id)
    {
        if ($this->Base->delete('perusahaan', ['id' => $id])) {
            set_pesan('data failed to delete.', 'admin/company');
        } else {
            set_pesan('data deleted successfully.','admin/company');
        }
        // redirect('admin/company');
    }

    public function toggle($id)
    {
        $status = $this->Base->getCompany('perusahaan', ['id' => $id])['is_active'];
        $toggle = $status ? 0 : 1; //Jika user aktif maka nonaktifkan, begitu pula sebaliknya
        $pesan = $toggle ? 'user has been activated.' : 'user has been disabled.';

        if ($this->Base->edit('perusahaan', ['is_active' => $toggle], ['id' => $id])) {
            set_pesan($pesan, 'admin/company');
        }
        set_pesan($pesan, 'admin/company');
        //redirect('admin/company');
    }

    public function detail_company($id)
    {
        $data['title'] = "Edit Company";
        $data['perusahaan'] = $this->Base->getCompany('perusahaan', ['id' => $id]);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/company/detail_company', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit_company($id)
    {
        $data['title'] = "Edit Company";
        $data['perusahaan'] = $this->Base->getCompany('perusahaan', ['id' => $id]);
        $this->load->view('admin/layout/header');
        $this->load->view('admin/company/edit_company', $data);
        $this->load->view('admin/layout/footer');
    }

    public function edit($id)
    {
        // $id = encode_php_tags($getId);
        $this->_validasi('edit');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit User";
            $data['perusahaan'] = $this->Base->getCompany('perusahaan', ['id' => $id]);
            $this->load->view('admin/layout/header');
            $this->load->view('admin/company/edit_company', $data);
            $this->load->view('admin/layout/footer');
        } else {
            $input = $this->input->post(null, true);
            $input_data = [
                'username'               => $this->input->post('username'),
                'nama_instansi'              => $this->input->post('nama_instansi'),
                'alamat'            => $this->input->post('alamat'),
                'email'             => $this->input->post('email'),
                'no_telp'           => $this->input->post('no_telp'),
                'fax'           => $this->input->post('fax'),
                'website'     => $this->input->post('website'),
                'deskripsi'               => $this->input->post('deskripsi'),
                'password'          => md5($this->input->post('password'))
            ];

            if ($this->Base->update('perusahaan', 'id', $id, $input_data)) {
                set_pesan('data changed successfully.', 'admin/company');
            } else {
                set_pesan('data failed to change.', 'admin/company/edit_company/'.$id);
            }
        }
    }
    /*public function auth()
    {
        $data['role'] = 1;  
        $this->load->view('headfoot/header', $data);
        $this->load->view('dashboard/index');
        $this->load->view('headfoot/footer');
    }*/
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Base_Model','Base');
    }

    public function index()
    {           
        $data['users'] = $this->Base->getStudent("mahasiswa");
        $data['skills'] = $this->Base->getTable("skill");
        $this->load->view('admin/layout/header');
        $this->load->view('admin/student/index', $data);
        $this->load->view('admin/layout/footer');
    }

    private function _validasi($mode)
    {
        $this->form_validation->set_rules('nim', 'Nim', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_Lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('kota', 'Kota', 'required|trim');
        $this->form_validation->set_rules('no_hp', 'No_Hp', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('jenjang', 'Jenjang', 'required|trim');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required|trim');
        $this->form_validation->set_rules('program_studi', 'Program_Studi', 'required|trim');
        $this->form_validation->set_rules('ipk', 'Ipk', 'required|trim');
        $this->form_validation->set_rules('tahun_lulus', 'Tahun_Lulus', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_Kelamin', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($mode == 'add') {
            $this->form_validation->set_rules('nim', 'Nim', 'required|trim');
            $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
            $this->form_validation->set_rules('tanggal_lahir', 'Tanggal_Lahir', 'required|trim');
            $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
            $this->form_validation->set_rules('kota', 'Kota', 'required|trim');
            $this->form_validation->set_rules('no_hp', 'No_Hp', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim');
            $this->form_validation->set_rules('jenjang', 'Jenjang', 'required|trim');
            $this->form_validation->set_rules('jurusan', 'Jurusan', 'required|trim');
            $this->form_validation->set_rules('program_studi', 'Program_Studi', 'required|trim');
            $this->form_validation->set_rules('ipk', 'Ipk', 'required|trim');
            $this->form_validation->set_rules('tahun_lulus', 'Tahun_Lulus', 'required|trim');
            $this->form_validation->set_rules('jenis_kelamin', 'Jenis_Kelamin', 'required|trim');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');
        } else {
            $db = $this->Base->get('mahasiswa', ['id' => $this->input->post('id', true)]);
            $nim = $this->input->post('nim', true);
            $nama = $this->input->post('nama', true);
            $tanggal_lahir = $this->input->post('tanggal_lahir', true);
            $alamat = $this->input->post('alamat', true);
            $kota = $this->input->post('kota', true);
            $no_hp = $this->input->post('no_hp', true);
            $email = $this->input->post('email', true);
            $jenjang = $this->input->post('jenjang', true);
            $jurusan = $this->input->post('jurusan', true);
            $program_studi = $this->input->post('program_studi', true);
            $ipk = $this->input->post('ipk', true);
            $tahun_lulus = $this->input->post('tahun_lulus', true);
            $jenis_kelamin = $this->input->post('jenis_kelamin', true);
            $password = $this->input->post('password', true);

            $this->form_validation->set_rules('nim', 'Nim', 'required|trim', '|is_unique[mahasiswa.nim]');
        }
    }

    public function add()
    {
        $this->_validasi('add');
        $id_skill = null;
        
        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah User";
            redirect(base_url("admin/student/add"));
        } else {
            $values = $_POST['id_skill'];

            foreach ($values as $a){
                $id_skill = $id_skill.",".$a;
            }
            $input = $this->input->post(null, true);
            $input_data = [
                'nim'               => $this->input->post('nim'),
                'nama'              => $this->input->post('nama'),
                'tanggal_lahir'     => $this->input->post('tanggal_lahir'),
                'alamat'            => $this->input->post('alamat'),
                'kota'              => $this->input->post('kota'),
                'no_hp'             => $this->input->post('no_hp'),
                'email'             => $this->input->post('email'),
                'jenjang'           => $this->input->post('jenjang'),
                'jurusan'           => $this->input->post('jurusan'),
                'program_studi'     => $this->input->post('program_studi'),
                'ipk'               => $this->input->post('ipk'),
                'tahun_lulus'       => $this->input->post('tahun_lulus'),
                'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
                'id_skill'          => $id_skill,
                'password'          => md5($this->input->post('password'))
            ];

            if ($this->Base->insert('mahasiswa', $input_data)) {
                //print_r($input_data);
                set_pesan('data saved successfully. Please click the activation button to activate User.', 'admin/student');
            } else {
                print_r($input_data);
                set_pesan('data failed to save.', 'admin/student');
            }
        }
    }

    public function delete($id)
    {
        if ($this->Base->delete('mahasiswa', ['id' => $id])) {
            set_pesan('data failed to delete.', 'admin/student');
        } else {
            set_pesan('data deleted successfully.','admin/student');
        }
        // redirect('admin/student');
    }

    public function toggle($id)
    {
        $status = $this->Base->getStudent('mahasiswa', ['id' => $id])['is_active'];
        $toggle = $status ? 0 : 1; //Jika user aktif maka nonaktifkan, begitu pula sebaliknya
        $pesan = $toggle ? 'user has been activated.' : 'user has been disabled.';

        if ($this->Base->edit('mahasiswa', ['is_active' => $toggle], ['id' => $id])) {
            set_pesan($pesan, 'admin/student');
        }
        set_pesan($pesan, 'admin/student');
        // redirect('admin/student');
    }

    // public function DDetail_skill($id)
    // {
    //     $where = [
    //         'mahasiswa.id' => $id
    //     ];
    //     $data['skill'] = $this->Base->joinSkillwithStudent($where);
    //     print_r($data);
    // }

    public function detail_student($id)
    {
        $where = [
            'mahasiswa.id' => $id
        ];
        $data['title'] = "Edit Student";
        $data['mahasiswa'] = $this->Base->getStudent('mahasiswa', ['id' => $id]);
        $data['skill'] = $this->Base->joinSkillwithStudent($where)->result_array();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/student/detail_student', $data, $where);
        $this->load->view('admin/layout/footer');
    }

    public function edit_student($id)
    {
        $data['title'] = "Edit Student";
        $data['mahasiswa'] = $this->Base->getStudent('mahasiswa', ['id' => $id]);
        //$data['skill_mahasiswa'] = $this->Base->joinJob($where)->result();
        $data['skills'] = $this->Base->getTable("skill");
        $this->load->view('admin/layout/header');
        $this->load->view('admin/student/edit_student', $data);
        //$this->load->view('admin/layout/footer');
    }

    public function edit($id)
    {
        // $id = encode_php_tags($getId);
        $this->_validasi('edit');
        $id_skill = null;

        if ($this->form_validation->run() == false) {
            $data['title'] = "Edit User";
            $data['mahasiswa'] = $this->Base->get('mahasiswa', ['id' => $id]);
            $data['mahasiswa'] = $this->Base->getStudent('mahasiswa', ['id' => $id]);
            $this->load->view('admin/layout/header');
            $this->load->view('admin/student/edit_student', $data);
            $this->load->view('admin/layout/footer');
        } else {
            $input = $this->input->post(null, true);
            $values = $_POST['id_skill'];

            foreach ($values as $a){
                $id_skill = $id_skill.",".$a;
            }

            $id_skill1 = substr($id_skill, 1);

            $input_data = [
                'nim'               => $this->input->post('nim'),
                'nama'              => $this->input->post('nama'),
                'tanggal_lahir'     => $this->input->post('tanggal_lahir'),
                'alamat'            => $this->input->post('alamat'),
                'kota'              => $this->input->post('kota'),
                'no_hp'             => $this->input->post('no_hp'),
                'email'             => $this->input->post('email'),
                'jenjang'           => $this->input->post('jenjang'),
                'jurusan'           => $this->input->post('jurusan'),
                'program_studi'     => $this->input->post('program_studi'),
                'ipk'               => $this->input->post('ipk'),
                'tahun_lulus'       => $this->input->post('tahun_lulus'),
                'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
                'id_skill'          => $id_skill1,
                'password'          => $this->input->post('password')
            ];

            if ($this->Base->update('mahasiswa', 'id', $id, $input_data)) {
                set_pesan('data changed successfully.', 'admin/student');
            } else {
                set_pesan('data failed to change.', 'admin/student/edit_student/'.$id);
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
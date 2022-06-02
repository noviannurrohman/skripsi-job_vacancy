<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    protected $user;
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_student', 'Student');
        
        $username = $this->session->userdata('nim');
        $this->user = $this->Student->getStudent('mahasiswa', ['nim' => $username]);

        if ($this->session->userdata['logged'] == TRUE)
        {
            //do something
        }
        else
        {
            redirect('student/login'); //if session is not there, redirect to login page
        }
    }

    public function index()
    {         
        $data['title'] = "Profile";
        $data['mahasiswa'] = $this->user;
        $username = $this->session->userdata('nim');
        $data['skill'] = $this->Student->joinSkill(['mahasiswa.nim' => $username])->result_array();
        $this->load->view('layout/header', $data);
        $this->load->view('student/profile', $data);
        //$this->load->view('layout/footer');
    }

    public function setting()
    {
        $data['title'] = "Profile";
        $data['mahasiswa'] = $this->user;
        $username = $this->session->userdata('nim');
        //$data['skills'] = $this->Student->joinSkill(['mahasiswa.nim' => $username])->result_array();
        $data['skills'] = $this->Student->getTable('skill');
        // $this->load->view('layout/header');
        $this->load->view('student/setting', $data);
    }

    public function _config()
    {
        $config['upload_path']      = FCPATH.".\assets\upload\cv";
        $config['allowed_types']    = 'pdf';
        $config['encrypt_name']     = FALSE;
        $config['max_size']         = '10240';

        $this->load->library('upload', $config);
    }

    public function edit_student()
    {
        // $this->_validasi();
        $id_skill = null;
        $nim = $this->input->post('nim', true);

        $db = $this->Student->getStudent('mahasiswa', ['id' => $this->input->post('id', true)]);
        // $uniq_username = $db['username'] == $username ? '' : '|is_unique[user.username]';
        // $uniq_email = $db['email'] == $email ?  : '|is_unique[user.email]';

        $this->form_validation->set_rules('nim', 'Nim', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('kota', 'Kota', 'required|trim|numeric');
        $this->form_validation->set_rules('no_hp', 'No Hp', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('jenjang', 'Jenjang', 'required|trim');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required|trim');
        $this->form_validation->set_rules('program_studi', 'Program Studi', 'required|trim');
        $this->form_validation->set_rules('ipk', 'IPK', 'required|trim');
        $this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'required|trim');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('resume', 'Resume', 'required|trim');
        //$this->_config();

        $userId = $this->session->userdata('login')['mahasiswa'];

        $id = $this->input->post('id');

        //$input = $this->input->post(null, true);
        $values = $_POST['id_skill'];

        foreach ($values as $a){
            $id_skill = $id_skill.",".$a;
        }
        $id_skill1 = substr($id_skill, 1);
        if ($_FILES['resume']['name'] == "") {
            $input_data = [
                'id'                            => $this->input->post('id'),
                'nim'                           => $this->input->post('nim'),
                'nama'                          => $this->input->post('nama'),
                'tanggal_lahir'                 => $this->input->post('tanggal_lahir'),
                'alamat'                        => $this->input->post('alamat'),
                'kota'                          => $this->input->post('kota'),
                'no_hp'                         => $this->input->post('no_hp'),
                'email'                         => $this->input->post('email'),
                'jenjang'                       => $this->input->post('jenjang'),
                'jurusan'                       => $this->input->post('jurusan'),
                'program_studi'                 => $this->input->post('program_studi'),
                'ipk'                           => $this->input->post('ipk'),
                'tahun_lulus'                   => $this->input->post('tahun_lulus'),
                'jenis_kelamin'                 => $this->input->post('jenis_kelamin'),
                'id_skill'                      => $id_skill1,
            ];
        } else {
            $this->_config();
            $input_data = [
                'id'                            => $this->input->post('id'),
                'nim'                           => $this->input->post('nim'),
                'nama'                          => $this->input->post('nama'),
                'tanggal_lahir'                 => $this->input->post('tanggal_lahir'),
                'alamat'                        => $this->input->post('alamat'),
                'kota'                          => $this->input->post('kota'),
                'no_hp'                         => $this->input->post('no_hp'),
                'email'                         => $this->input->post('email'),
                'jenjang'                       => $this->input->post('jenjang'),
                'jurusan'                       => $this->input->post('jurusan'),
                'program_studi'                 => $this->input->post('program_studi'),
                'ipk'                           => $this->input->post('ipk'),
                'tahun_lulus'                   => $this->input->post('tahun_lulus'),
                'jenis_kelamin'                 => $this->input->post('jenis_kelamin'),
                'id_skill'                      => $id_skill1,
                'resume'                        => $_FILES['resume']['name'],
            ];
        }

        $userdata = [
            'id_skill' => $id_skill1,
        ];
        $this->session->set_userdata('userLogCp', 'student');
        $this->session->set_userdata($userdata);
        //echo json_encode($input_data);
        if (empty($_FILES['resume']['name'])) {
            $insert = $this->Student->update('mahasiswa', 'id', $input_data['id'], $input_data);
            if ($insert) {
                set_pesan('perubahan data berhasil disimpan.', 'student/profile/');
                //echo json_encode($input_data);
            } else {
                set_pesan('perubahan data tidak disimpan.', 'student/profile/setting'.$userId);
            }
            //echo $_FILES['resume'];
            set_pesan('Insert The Resume.', 'student/profile/setting'.$userId);
        } else {
            if ($this->upload->do_upload('resume') == false) {
                echo $this->upload->display_errors();
                die;
            } else {
                $this->session->unset_userdata('foto_admin');
                $datacv = $this->Student->getStudent('mahasiswa', ['id' => $id]);
                if ($datacv['resume'] != '') {
                    $old_image = FCPATH . 'assets/upload/cv/' . $datacv['resume'];
                    if (!unlink($old_image)) {
                        set_pesan('gagal hapus cv lama.', 'student/profile/'.$userId); 
                        //echo json_encode($input_data);
                        //$this->session->set_userdata('foto_admin', $datacv['resume']);
                    }
                }

                $input_data['resume'] = $this->upload->data('file_name');
                $update = $this->Student->update('mahasiswa', 'id', $input_data['id'], $input_data);
                if ($update) {
                    set_pesan('perubahan resume berhasil disimpan .', 'student/profile/'); 
                    //$this->session->set_userdata('foto_mahasiswa', $datacv['resume']);
                    //echo json_encode($input_data);
                } else {
                    set_pesan('gagal resume menyimpan perubahan.', 'student/profile/setting'.$userId); 
                    //echo json_encode($input_data);
                }
                set_pesan('Ada Kesalahan pada resume', 'student/profile/setting'.$userId); 
                //echo json_encode($input_data);
            }
        }
        
        // if ($this->form_validation->run() == false) {
        //     //redirect(base_url("student/profile/setting"));
        //     set_pesan('Error Form Validation.', 'student/profile/setting'.$userId);
        //     //echo $this->input->post('resume');
        // } else {
            
        // }
    }
}
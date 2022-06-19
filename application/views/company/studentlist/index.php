<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <?php 
        $sidebar['data'] = "studentlist";
        $this->load->view('company/layout/sidebar', $sidebar); 
    ?>

    <script>
    </script>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
    
        <!-- Main Content -->
        <div id="content">

            <?php $this->load->view('company/layout/topbar'); ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">
            <?= $this->session->flashdata('pesan'); ?>
            <div class="card shadow-sm mb-4 border-bottom-primary">
                <div class="card-header bg-white py-3">
                    <div class="row">
                        <div class="col">
                            <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                                Students Data
                            </h4>
                        </div>
                        <div class="col-auto">
                            <a href="#" class="btn btn-sm btn-primary btn-icon-split" data-toggle="modal" data-target="#addModal">
                            <!-- <a href="<?= base_url('admin/student/add_student') ?>" class="btn btn-sm btn-primary btn-icon-split"> -->
                                <!-- <span class="icon">
                                    <i class="fa fa-user-plus"></i>
                                </span>
                                <span class="text">
                                    Add Student
                                </span> -->
                            </a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped dt-responsive nowrap" id="dataTable">
                        <thead>
                            <tr>
                                <th width="30">No.</th>
                                <!-- <th>Foto</th> -->
                                <th>Student Name</th>
                                <!-- <th>Username</th> -->
                                <th>Email</th>
                                <!-- <th>Job Skill</th> -->
                                <!-- <th>Role</th> -->
                                <th>Info</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            if ($users) :
                                foreach ($users as $user) :
                                    ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <!-- <td>
                                            <img width="30" src="<?= base_url() ?>assets/img/avatar/<?= $user['foto'] ?>" alt="<?= $user['nama']; ?>" class="img-thumbnail rounded-circle">
                                        </td> -->
                                        <td><?= $user['nama']; ?></td>
                                        <!-- <td><?= $user['username']; ?></td> -->
                                        <td><?= $user['email']; ?></td>
                                        
                                        <!-- <td><?= $user['no_telp']; ?></td> -->
                                        <!-- <td><?= $user['role']; ?></td> -->
                                        <td>
                                            <a href="<?= base_url('company/Student_List/detail_student/') . $user['id'] ?>" class="btn btn-circle btn-sm btn-detail">
                                                <i class="fa fa-info"></i>
                                            </a>
                                            <!-- <a href="<?= base_url('admin/student/toggle/') . $user['id'] ?>" class="btn btn-circle btn-sm <?= $user['is_active'] ? 'btn-secondary' : 'btn-success' ?>" title="<?= $user['is_active'] ? 'Disable User' : 'Activate User' ?>">
                                                <i class="fa fa-fw fa-power-off"></i>
                                            </a>
                                            <a href="<?= base_url('admin/student/edit_student/') . $user['id'] ?>" class="btn btn-circle btn-sm btn-warning">
                                                <i class="fa fa-fw fa-edit"></i>
                                            </a>
                                            <a onclick="return confirm('Yakin ingin menghapus data?')" href="<?= base_url('admin/student/delete/') . $user['id'] ?>" class="btn btn-circle btn-sm btn-danger">
                                                <i class="fa fa-fw fa-trash"></i>
                                            </a> -->
                                        </td>
                                    </tr>
                                <?php endforeach;
                                else : ?>
                                <tr>
                                    <td colspan="8" class="text-center">Please add a new user</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            <!-- End of Main Content -->
         <!-- Add Modal-->
<!-- <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Data Student</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <form action="<?php echo base_url('admin/student/add') ?>" class="form" method="post">
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="nim">NIM</label>
                    <div class="col-md-6">
                        <input value="<?= set_value('nim'); ?>" type="text" id="nim" name="nim" class="form-control" placeholder="NIM">
                        <?= form_error('nim', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="nama">Full Name</label>
                    <div class="col-md-6">
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Full Name">
                        <?= form_error('nama', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="tanggal_lahir">Date of Birth</label>
                    <div class="col-md-6">
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" >
                        <?= form_error('tanggal_lahir', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="alamat">Address</label>
                    <div class="col-md-6">
                        <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Address">
                        <?= form_error('alamat', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="kota">City</label>
                    <div class="col-md-6">
                        <input type="text" id="kota" name="kota" class="form-control" placeholder="City">
                        <?= form_error('kota', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="no_hp">Phone Number</label>
                    <div class="col-md-6">
                        <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="Phone Number">
                        <?= form_error('no_hp', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="email">Email</label>
                    <div class="col-md-6">
                        <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                        <?= form_error('email', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="jenjang">Level</label>
                    <div class="col-md-6">
                        <div class="custom-control custom-radio">
                            <input <?= set_radio('jenjang', 'D1'); ?> value="D1" type="radio" id="D1" name="jenjang" class="custom-control-input">
                            <label class="custom-control-label" for="D1">D1</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input <?= set_radio('jenjang', 'D2'); ?> value="D2" type="radio" id="D2" name="jenjang" class="custom-control-input">
                            <label class="custom-control-label" for="D2">D2</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input <?= set_radio('jenjang', 'D3'); ?> value="D3" type="radio" id="D3" name="jenjang" class="custom-control-input">
                            <label class="custom-control-label" for="D3">D3</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input <?= set_radio('jenjang', 'D4'); ?> value="D4" type="radio" id="D4" name="jenjang" class="custom-control-input">
                            <label class="custom-control-label" for="D4">D4</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input <?= set_radio('jenjang', 'S1'); ?> value="S1" type="radio" id="S1" name="jenjang" class="custom-control-input">
                            <label class="custom-control-label" for="S1">S1</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input <?= set_radio('jenjang', 'S2'); ?> value="S2" type="radio" id="S2" name="jenjang" class="custom-control-input">
                            <label class="custom-control-label" for="S2">S2</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input <?= set_radio('jenjang', 'S3'); ?> value="S3" type="radio" id="S3" name="jenjang" class="custom-control-input">
                            <label class="custom-control-label" for="S3">S3</label>
                        </div>
                        <?= form_error('jenjang', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="jurusan">Major</label>
                    <div class="col-md-6">
                        <input type="text" id="jurusan" name="jurusan" class="form-control" placeholder="Major">
                        <?= form_error('jurusan', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="program_studi">Study Program</label>
                    <div class="col-md-6">
                        <input type="text" id="program_studi" name="program_studi" class="form-control" placeholder="Study Program">
                        <?= form_error('program_studi', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="ipk">IPK</label>
                    <div class="col-md-6">
                        <input type="text" id="ipk" name="ipk" class="form-control" placeholder="IPK">
                        <?= form_error('ipk', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="tahun_lulus">Graduation Year</label>
                    <div class="col-md-6">
                        <input type="int" id="tahun_lulus" name="tahun_lulus" class="form-control" placeholder="Graduation Year">
                        <?= form_error('tahun_lulus', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="jenis_kelamin">Gender</label>
                    <div class="col-md-6">
                        <div class="custom-control custom-radio">
                            <input <?= set_radio('jenis_kelamin', 'Male'); ?> value="Male" type="radio" id="male" name="jenis_kelamin" class="custom-control-input">
                            <label class="custom-control-label" for="male">Male</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input <?= set_radio('jenis_kelamin', 'Female'); ?> value="Female" type="radio" id="female" name="jenis_kelamin" class="custom-control-input">
                            <label class="custom-control-label" for="female">Female</label>
                        </div>
                        <?= form_error('jenis_kelamin', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-4 text-md-right" for="password">Password</label>
                    <div class="col-md-6">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                        <?= form_error('password', '<span class="text-danger small">', '</span>'); ?>
                    </div>
                </div>
                <br>
                <div class="row form-group justify-content-end">
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary btn-icon-split">
                            <span class="icon"><i class="fa fa-save"></i></span>
                            <span class="text">Save</span>
                        </button>
                        <button type="reset" class="btn btn-secondary">
                            Reset
                        </button>
                    </div>
                </div>
            </form>
                </div>
            </div>
        </div>
    </div>
</div> -->


<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <?php 
        $sidebar['data'] = "student";
        $this->load->view('company/layout/sidebar', $sidebar); 
    ?>

    <script>
    </script>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
    
        <!-- Main Content -->
        <div id="content">

        <?php $this->load->view('company/layout/topbar'); ?>
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Student Detail
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('company/Student_List/') ?>" class="btn btn-sm btn-secondary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Back
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?= $this->session->flashdata('pesan'); ?>
                <?= form_open('', [], ['id' => $mahasiswa['id']]); ?>
                <table class="table table-bordered no-margin">
                    <tbody>
                        <tr>
                            <th style="width: 35%;">NIM</th>
                            <td><span id="nim"></span><?= $mahasiswa['nim']?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">Full Name</th>
                            <td><span id="nama"></span><?= $mahasiswa['nama']?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">Date of Birth</th>
                            <td><span id="tanggal_lahir"></span><?= $mahasiswa['tanggal_lahir']?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">Address</th>
                            <td><span id="alamat"></span><?= $mahasiswa['alamat']?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">City</th>
                            <td><span id="kota"></span><?= $mahasiswa['kota']?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">Phone Number</th>
                            <td><span id="no_hp"></span><?= $mahasiswa['no_hp']?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">Email</th>
                            <td><span id="email"></span><?= $mahasiswa['email']?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">level</th>
                            <td><span id="jenjang"></span><?= $mahasiswa['jenjang']?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">Major</th>
                            <td><span id="jurusan"></span><?= $mahasiswa['jurusan']?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">Study Program</th>
                            <td><span id="program_studi"></span><?= $mahasiswa['program_studi']?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">IPK</th>
                            <td><span id="ipk"></span><?= $mahasiswa['ipk']?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">Graduation Year</th>
                            <td><span id="tahun_lulus"></span><?= $mahasiswa['tahun_lulus']?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">Gender</th>
                            <td><span id="jenis_kelamin"></span><?= $mahasiswa['jenis_kelamin']?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">Job Skill</th>
                            <td><span id="deskripsi"></span>
                                <!-- <?= $data->nama_skill;?> -->
                                <?php
                                if ($skill) :
                                    foreach ($skill as $key1 => $data1) :
                                        ?>
                                         - <?= $data1['nama_skill'] ?> <br>
                                        <?php endforeach;
                                    else : ?>
                                    No Skill Data
                                <?php endif; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>
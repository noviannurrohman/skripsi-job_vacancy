<?php echo "<script>console.log('" . json_encode($skill) . "');</script>"; ?>

<div class="container-fluid" style="padding-right: 15%; padding-left: 15%;">
    <!-- Content Row -->

    <div class="card p-2 shadow-sm border-bottom-primary">
        <div class="card-header bg-white">
            <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                <?= $mahasiswa['nama']; ?>
            </h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-2 mb-4 mb-md-0">
                    <!-- <img src="<?= base_url() ?>assets/upload/<?= $mahasiswa['foto']; ?>" alt="" class="img-thumbnail rounded mb-2"> -->

                    <!-- <a href="<?= base_url('profile/ubahpassword'); ?>" class="btn btn-sm btn-block btn-primary"><i class="fa fa-lock"></i> Ubah Password</a> -->
                </div>
                <div class="col-md-10">
                    <table class="table">
                        <tr>
                            <th width="200">NIM</th>
                            <td><?= $mahasiswa['nim']; ?></td>
                        </tr>
                        <tr>
                            <th>Full Name</th>
                            <td><?= $mahasiswa['nama']; ?></td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <td><?= $mahasiswa['tanggal_lahir']; ?></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><?= $mahasiswa['alamat']; ?></td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td><?= $mahasiswa['kota']; ?></td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td><?= $mahasiswa['no_hp']; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?= $mahasiswa['email']; ?></td>
                        </tr>
                        <tr>
                            <th>Level</th>
                            <td><?= $mahasiswa['jenjang']; ?></td>
                        </tr>
                        <tr>
                            <th>Major</th>
                            <td><?= $mahasiswa['jurusan']; ?></td>
                        </tr>
                        <tr>
                            <th>Study Program</th>
                            <td><?= $mahasiswa['program_studi']; ?></td>
                        </tr>
                        <tr>
                            <th>IPK</th>
                            <td><?= $mahasiswa['ipk']; ?></td>
                        </tr>
                        <tr>
                            <th>Graduation Year</th>
                            <td><?= $mahasiswa['tahun_lulus']; ?></td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td><?= $mahasiswa['jenis_kelamin']; ?></td>
                        </tr>
                        <tr>
                            <th style="width: 35%;">Job Skill</th>
                            <td><span id="deskripsi"></span>
                                <!-- <?= $data->nama_skill; ?> -->
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
                        <tr>
                            <th>CV</th>
                            <td><?= $mahasiswa['resume']; ?></td>
                        </tr>
                        <tr>
                            <th>Certificate</th>
                            <td><?= $mahasiswa['sertifikat']; ?></td>
                        </tr>
                    </table>
                    <a href="<?= base_url('student/profile/setting'); ?>" class="btn btn-sm btn-block btn-primary"><i class="fa fa-edit"></i> Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
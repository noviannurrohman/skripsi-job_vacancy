<?php echo "<script>console.log('" . json_encode($skills) . "');</script>"; ?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-Job Vacancy </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/'); ?>img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>flaticon.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>price_rangs.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>slicknav.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>animate.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>magnific-popup.css">
    <link href="<?= base_url('assets/admin/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>themify-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>slick.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>style.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>mystyle.css">
    <link href="<?= base_url('assets/admin/'); ?>dist/css/bootstrap-select.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <!-- Preloader Start -->
    <!--<div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparrent">
            <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="<?= base_url('dashboard'); ?>"><img src="<?= base_url('assets/'); ?>img/logo/logojob.png" alt="" style="width: 199px;"></a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="<?= base_url('student/dashboard'); ?>">Home</a></li>
                                            <li><a href="<?= base_url('student/Find_Job'); ?>">Find a Jobs </a></li>
                                            <!-- <li><a href="#">Page</a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">Blog</a></li>
                                                    <li><a href="single-blog.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Elements</a></li>
                                                    <li><a href="job_details.html">job Details</a></li>
                                                </ul>
                                            </li> -->
                                            <li><a href="<?= base_url('student/contact'); ?>">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    <?php
                                    if ($this->session->userdata('userLog') == null) {
                                        echo '<a href="' . base_url('company/login') . '" class="btn head-btn1">Company</a>
                                            <a href="' . base_url('student/login') . '" class="btn head-btn2">Login</a>';
                                    } else {
                                        echo '<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="img-profile rounded-circle"
                                                    src="' . base_url('assets/admin/') . 'img/undraw_profile.svg" style="width: 32px;">
                                            </a>';
                                    }
                                    ?>
                                    <!-- <a href="<?= base_url('login_company'); ?>" class="btn head-btn1">Company</a>
                                    <a href="<?= base_url('login_student'); ?>" class="btn head-btn2">Login</a> -->
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                        <a class="dropdown-item" href="<?= base_url('student/profile'); ?>">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Profile
                                        </a>
                                        <!-- <a class="dropdown-item" href="#">
                                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Settings
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Activity Log
                                        </a> -->
                                        <!-- <div class="dropdown-divider"></div> -->
                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Logout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <div class="card-body" style="padding: 2rem 17.25rem 3rem 17.25rem;">

        <?= $this->session->flashdata('pesan'); ?>
        <?php if($this->session->flashdata('succ_msg')){?>
            <div class="alert alert-success"><?= $this->session->flashdata('succ_msg')?></div>
        <?php }else if($this->session->flashdata('err_msg')){?>
                <div class="alert alert-danger"><?= $this->session->flashdata('err_msg')?></div>
        <?php }?>

        <!-- <?= form_open_multipart('', [], ['id' => $mahasiswa['id']]); ?> -->
        <form action="<?php echo base_url('student/profile/edit_student/') ?>" class="form" method="post" enctype="multipart/form-data">
            <!-- <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="foto">Foto</label>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-3">
                                <img src="<?= base_url() ?>assets/upload/<?= $mahasiswa['foto']; ?>" alt="<?= $mahasiswa['nama_instansi']; ?>" class="rounded-circle shadow-sm img-thumbnail">
                            </div>
                            <div class="col-9">
                                <input type="file" name="foto" id="foto" accept="image/png, image/jpeg, image/jpg, image/gif">
                                <?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                </div> -->
            <input value="<?= $mahasiswa['id']; ?>" name="id" id="id" type="hidden" class="form-control">
            <input value="<?= $mahasiswa['nim']; ?>" name="nim" id="nim" type="hidden" class="form-control">
            <div class="row form-group">
                <label class="col-md-3 text-md-right" for="nama">Full Name</label>
                <div class="col-md-9">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                        </div>
                        <input value="<?= $mahasiswa['nama']; ?>" name="nama" id="nama" type="text" class="form-control" placeholder="Full Name">
                    </div>
                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-3 text-md-right" for="tanggal_lahir">Date of Birth</label>
                <div class="col-md-9">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-building"></i></span>
                        </div>
                        <input value="<?= $mahasiswa['tanggal_lahir']; ?>" name="tanggal_lahir" id="tanggal_lahir" type="date" class="form-control">
                    </div>
                    <?= form_error('tanggal_lahir', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-3 text-md-right" for="alamat">Address</label>
                <div class="col-md-9">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-map-marker"></i></span>
                        </div>
                        <input value="<?= $mahasiswa['alamat'] ?>" name="alamat" id="alamat" type="text" class="form-control" placeholder="Address">
                    </div>
                    <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-3 text-md-right" for="kota">City</label>
                <div class="col-md-9">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-street-view"></i></span>
                        </div>
                        <input value="<?= $mahasiswa['kota'] ?>" name="kota" id="kota" type="text" class="form-control" placeholder="City">
                    </div>
                    <?= form_error('kota', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-3 text-md-right" for="no_hp">Phone Number</label>
                <div class="col-md-9">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-phone"></i></span>
                        </div>
                        <input value="<?= $mahasiswa['no_hp'] ?>" name="no_hp" id="no_hp" type="text" class="form-control" placeholder="Phone Number">
                    </div>
                    <?= form_error('no_hp', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-3 text-md-right" for="email">Email</label>
                <div class="col-md-9">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-envelope"></i></span>
                        </div>
                        <input value="<?= $mahasiswa['email'] ?>" name="email" id="email" type="email" class="form-control" placeholder="Email">
                    </div>
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-3 text-md-right" for="jenjang">Level</label>
                <div class="col-md-6">
                    <div class="custom-control custom-radio">
                        <?php if ($mahasiswa['jenjang'] == 'D1') {
                            echo '<input ' . set_radio('jenjang', 'D1') . ' value="D1" type="radio" id="D1" name="jenjang" class="custom-control-input" checked>';
                        } else {
                            echo '<input ' . set_radio('jenjang', 'D1') . ' value="D1" type="radio" id="D1" name="jenjang" class="custom-control-input">';
                        }
                        ?>

                        <label class="custom-control-label" for="D1">D1</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <?php if ($mahasiswa['jenjang'] == 'D2') {
                            echo '<input ' . set_radio('jenjang', 'D2') . ' value="D2" type="radio" id="D2" name="jenjang" class="custom-control-input" checked>';
                        } else {
                            echo '<input ' . set_radio('jenjang', 'D2') . ' value="D2" type="radio" id="D2" name="jenjang" class="custom-control-input">';
                        }
                        ?>
                        <label class="custom-control-label" for="D2">D2</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <?php if ($mahasiswa['jenjang'] == 'D3') {
                            echo '<input ' . set_radio('jenjang', 'D3') . ' value="D3" type="radio" id="D3" name="jenjang" class="custom-control-input" checked>';
                        } else {
                            echo '<input ' . set_radio('jenjang', 'D3') . ' value="D3" type="radio" id="D3" name="jenjang" class="custom-control-input">';
                        }
                        ?>
                        <label class="custom-control-label" for="D3">D3</label>
                    </div>
                    <div class="custom-control custom-radio">

                        <?php if ($mahasiswa['jenjang'] == 'D4') {
                            echo '<input ' . set_radio('jenjang', 'D4') . ' value="D4" type="radio" id="D4" name="jenjang" class="custom-control-input" checked>';
                        } else {
                            echo '<input ' . set_radio('jenjang', 'D4') . ' value="D4" type="radio" id="D4" name="jenjang" class="custom-control-input">';
                        }
                        ?>

                        <label class="custom-control-label" for="D4">D4</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <?php if ($mahasiswa['jenjang'] == 'S1') {
                            echo '<input ' . set_radio('jenjang', 'S1') . ' value="S1" type="radio" id="S1" name="jenjang" class="custom-control-input" checked>';
                        } else {
                            echo '<input ' . set_radio('jenjang', 'S1') . ' value="S1" type="radio" id="S1" name="jenjang" class="custom-control-input">';
                        }
                        ?>
                        <label class="custom-control-label" for="S1">S1</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <?php if ($mahasiswa['jenjang'] == 'S2') {
                            echo '<input ' . set_radio('jenjang', 'S2') . ' value="S2" type="radio" id="S2" name="jenjang" class="custom-control-input" checked>';
                        } else {
                            echo '<input ' . set_radio('jenjang', 'S2') . ' value="S2" type="radio" id="S2" name="jenjang" class="custom-control-input">';
                        }
                        ?>
                        <label class="custom-control-label" for="S2">S2</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <?php if ($mahasiswa['jenjang'] == 'S3') {
                            echo '<input ' . set_radio('jenjang', 'S3') . ' value="S3" type="radio" id="S3" name="jenjang" class="custom-control-input" checked>';
                        } else {
                            echo '<input ' . set_radio('jenjang', 'S3') . ' value="S3" type="radio" id="S3" name="jenjang" class="custom-control-input">';
                        }
                        ?>
                        <label class="custom-control-label" for="S3">S3</label>
                    </div>
                    <?= form_error('jenjang', '<span class="text-danger small">', '</span>'); ?>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-3 text-md-right" for="jurusan">Major</label>
                <div class="col-md-9">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-circle-info"></i></span>
                        </div>
                        <input value="<?= $mahasiswa['jurusan'] ?>" name="jurusan" id="jurusan" type="text" class="form-control" placeholder="Major">
                    </div>
                    <?= form_error('jurusan', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-3 text-md-right" for="program_studi">Study Program</label>
                <div class="col-md-9">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-reguler fa-graduation-cap"></i></span>
                        </div>
                        <input value="<?= $mahasiswa['program_studi'] ?>" name="program_studi" id="program_studi" type="text" class="form-control" placeholder="Study Program">
                    </div>
                    <?= form_error('program_studi', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-3 text-md-right" for="ipk">IPK</label>
                <div class="col-md-9">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-book"></i></span>
                        </div>
                        <input value="<?= $mahasiswa['ipk'] ?>" name="ipk" id="ipk" type="text" class="form-control" placeholder="IPK">
                    </div>
                    <?= form_error('ipk', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-3 text-md-right" for="tahun_lulus">Graduation Year</label>
                <div class="col-md-9">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-graduation-cap"></i></span>
                        </div>
                        <input value="<?= $mahasiswa['tahun_lulus'] ?>" name="tahun_lulus" id="tahun_lulus" type="text" class="form-control" placeholder="Graduation Year">
                    </div>
                    <?= form_error('tahun_lulus', '<small class="text-danger">', '</small>'); ?>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-3 text-md-right" for="jenis_kelamin">Gender</label>
                <div class="col-md-6">
                    <div class="custom-control custom-radio">
                        <?php if ($mahasiswa['jenis_kelamin'] == 'Male') {
                            echo '<input ' . set_radio('jenis_kelamin', 'male') . ' value="Male" type="radio" id="male" name="jenis_kelamin" class="custom-control-input" checked>';
                        } else {
                            echo '<input ' . set_radio('jenis_kelamin', 'male') . ' value="Male" type="radio" id="male" name="jenis_kelamin" class="custom-control-input">';
                        }
                        ?>
                        <label class="custom-control-label" for="male">Male</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <?php if ($mahasiswa['jenis_kelamin'] == 'Female') {
                            echo '<input ' . set_radio('jenis_kelamin', 'female') . ' value="Female" type="radio" id="female" name="jenis_kelamin" class="custom-control-input" checked>';
                        } else {
                            echo '<input ' . set_radio('jenis_kelamin', 'female') . ' value="Female" type="radio" id="female" name="jenis_kelamin" class="custom-control-input">';
                        }
                        ?>
                        <label class="custom-control-label" for="female">Female</label>
                    </div>
                    <?= form_error('jenis_kelamin', '<span class="text-danger small">', '</span>'); ?>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-3 text-md-right" for="nama_skill">Job Skill</label>
                <div class="col-md-6">
                    <select id="id_skill" name="id_skill[]" class="form-control" multiple="multiple">
                        <!-- <option value=""></option> -->
                        <?php
                        $no = 1;
                        if ($skills) :
                            foreach ($skills as $data_skill) :
                        ?>
                                <option value="<?= $data_skill['id'] ?>"><?= $data_skill['nama_skill'] ?></option>
                            <?php endforeach;
                        else : ?>
                            <tr>
                                <td colspan="8" class="text-center">No Job Vacancies </td>
                            </tr>
                        <?php endif; ?>
                    </select>
                    <?= form_error('nama_skill', '<span class="text-danger small">', '</span>'); ?>
                </div>
            </div>
            <div class="row form-group">
                <label class="col-md-3 text-md-right" for="sertifikat">CV <br> *harus pdf</label>
                <div class="col-md-1">
                    <div class="row">
                        <!-- <div class="col-3">
                                <embed src="<?= base_url() ?>assets/upload/cv/<?= $mahasiswa['resume']; ?>" width="800px" height="2100px" />
                            </div> -->
                        <?php if ($mahasiswa['resume'] != "") {
                            echo '<a href="' . base_url() . 'assets/upload/cv/' . $mahasiswa["resume"] . '" style="color: blue;">' . $mahasiswa["resume"] .  '</a>';
                        } ?>
                        <div class="col-9">
                            <input type="file" name="resume" id="resume" accept="file/pdf" value="<?= base_url() ?>assets/upload/cv/<?= $mahasiswa['resume']; ?>">
                            <?= form_error('resume', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- INI MULTIPLE  -->
            <div class="row form-group">
                <label class="col-md-3 text-md-right" for="sertifikat">Certificate <br> *harus pdf</label>
                <div class="col-md-1">
                    <div class="row">
                        <?php if ($mahasiswa['sertifikat'] != "") {
                            $arrSertif = explode(';', $mahasiswa['sertifikat']);
                            $html = "";
                            foreach ($arrSertif as $sertif) {
                                $html .= '<a href="' . base_url() . 'assets/upload/sertifikat/' . $sertif . '" style="color: blue;">' . $sertif .  '</a>';
                            } 
                            echo $html;
                        } ?>
                        <div class="col-9">
                            <input type="file" accept=".pdf" name="files[]" id="sertifikat" multiple="">
                            <?= form_error('sertifikat', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <input value="<?= $mahasiswa['password'] ?>" type="hidden" id="password" name="password" class="form-control" placeholder="Password">
            <div class="row form-group">
                <div class="col-md-9 offset-md-3">
                    <button type="submit" class="btn btn-primary" style="padding: 25px;">Save</button>
                </div>
            </div>
            <?= form_close(); ?>
    </div>

    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                             <div class="footer-tittle">
                                 <h4>About Us</h4>
                                 <div class="footer-pera">
                                     <p>E - Job Vacancy is a information system that makes it easier for polynema students to find jobs according to their skills.</p>
                                </div>
                             </div>
                         </div>

                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                    <p>Address : Jl. Soekarno Hatta No.9, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141.</p>
                                    </li>
                                    <li><a href="#">Phone : (0341) 404424</a></li>
                                    <li><a href="#">Email : cs@polinema.ac.id</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Important Link</h4>
                                <ul>
                                    <!-- <li><a href="#"> View Project</a></li> -->
                                    <li><a href="<?= base_url('contact'); ?>">Contact Us</a></li>
                                    <!-- <li><a href="#">Testimonial</a></li>
                                    <li><a href="#">Proparties</a></li>
                                    <li><a href="#">Support</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <div class="footer-pera footer-pera2">
                                 <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
                             </div>
                             
                             <div class="footer-form" >
                                 <div id="mc_embed_signup">
                                     <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                     method="get" class="subscribe_form relative mail_part">
                                         <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                         class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                         onblur="this.placeholder = ' Email Address '">
                                         <div class="form-icon">
                                             <button type="submit" name="submit" id="newsletter-submit"
                                             class="email_icon newsletter-submit button-contactForm"><img src="<?= base_url('assets/'); ?>img/icon/form.png" alt=""></button>
                                         </div>
                                         <div class="mt-10 info"></div>
                                     </form>
                                 </div>
                             </div>
                            </div>
                        </div>
                    </div> -->
                </div>
               <!--  -->
               <!-- <div class="row footer-wejed justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        
                        <div class="footer-logo mb-20">
                        <a href="<?= base_url('dashboard'); ?>"><img src="<?= base_url('assets/'); ?>img/logo/logojob.png" style="width: 199px;" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 custom-titlefooter">
                        <div class="footer-tittle-bottom">
                            <span>5000+</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 custom-titlefooter">
                        <div class="footer-tittle-bottom">
                            <span>451</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 custom-titlefooter">
                      
                        <div class="footer-tittle-bottom">
                            <span>568</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
               </div> -->
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex justify-content-between align-items-center">
                         <div class="col-xl-10 col-lg-10 ">
                             <div class="footer-copy-right">
                                 <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                         <div class="col-xl-2 col-lg-2">
                             <div class="footer-social f-right">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#"><i class="fas fa-globe"></i></a>
                                 <a href="#"><i class="fab fa-behance"></i></a>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

                    <a class="btn btn-primary" id="logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JS here -->
    <script src="<?= base_url('assets/js/'); ?>vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= base_url('assets/js/'); ?>vendor/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="<?= base_url('assets/js/'); ?>popper.min.js"></script>
    <script src="<?= base_url('assets/js/'); ?>bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?= base_url('assets/js/'); ?>jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= base_url('assets/js/'); ?>owl.carousel.min.js"></script>
    <script src="<?= base_url('assets/js/'); ?>slick.min.js"></script>
    <script src="<?= base_url('assets/js/'); ?>price_rangs.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="<?= base_url('assets/js/'); ?>wow.min.js"></script>
    <script src="<?= base_url('assets/js/'); ?>animated.headline.js"></script>
    <script src="<?= base_url('assets/js/'); ?>jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="<?= base_url('assets/js/'); ?>jquery.scrollUp.min.js"></script>
    <!-- <script src="<?= base_url('assets/js/'); ?>jquery.nice-select.min.js"></script> -->
    <script src="<?= base_url('assets/js/'); ?>jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="<?= base_url('assets/js/'); ?>contact.js"></script>
    <script src="<?= base_url('assets/js/'); ?>jquery.form.js"></script>
    <script src="<?= base_url('assets/js/'); ?>jquery.validate.min.js"></script>
    <script src="<?= base_url('assets/js/'); ?>mail-script.js"></script>
    <script src="<?= base_url('assets/js/'); ?>jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="<?= base_url('assets/js/'); ?>plugins.js"></script>
    <script>
        //localStorage.clear();
        if (localStorage.getItem('user') == 'student') {
            document.getElementById("logout").href = "<?php echo base_url("student/login/logout") ?>";
        } else {
            document.getElementById("logout").href = "<?php echo base_url("student/login/logout") ?>";
        }
        console.log(<?php $this->session->userdata('UserLog') ?>);
        $(document).ready(function() {
            $("#id_skill").select2({
                placeholder: "Silahkan Pilih"
            });

            /* Syntax untuk mengambil php lalu dari string diubah ke array */
            const str = <?php echo (json_encode($mahasiswa['id_skill'])) ?>;
            const arr = str.split(',');

            /* fungsi console untuk menampilkan hasil dari variable arr ke konsol */
            //console.log(arr);

            /* fungsi untuk menampilkan data dari database ke select2 */
            $('#id_skill').val(arr).change();
        });
    </script>

</body>

</html>
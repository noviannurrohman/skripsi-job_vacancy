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
        <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>nice-select.css">
        <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>style.css">
        <link rel="stylesheet" href="<?= base_url('assets/css/'); ?>mystyle.css">
        <link href="<?= base_url('assets/admin/'); ?>dist/css/bootstrap-select.css" rel="stylesheet">
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
                                        if($this->session->userdata('userLog') == null) { 
                                            echo '<a href="'.base_url('company/login').'" class="btn head-btn1">Company</a>
                                            <a href="'.base_url('student/login').'" class="btn head-btn2">Login</a>';
                                        } else {
                                            echo '<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <img class="img-profile rounded-circle"
                                                    src="'.base_url('assets/admin/').'img/undraw_profile.svg" style="width: 32px;">
                                            </a>';
                                        }
                                    ?>
                                    <!-- <a href="<?= base_url('login_company'); ?>" class="btn head-btn1">Company</a>
                                    <a href="<?= base_url('login_student'); ?>" class="btn head-btn2">Login</a> -->
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                        aria-labelledby="userDropdown">
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

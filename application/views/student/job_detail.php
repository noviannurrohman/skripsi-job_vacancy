<?php echo "<script>console.log('" . json_encode($this->session->userdata('id')) . "');</script>"; ?>   
<?php echo "<script>console.log('" . json_encode($jml_pelamar) . "');</script>"; ?>   
        <script src="<?= base_url('assets/js/'); ?>mystyle.js"></script>     
        
    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="<?= base_url('assets/'); ?>img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Job Detail</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End -->
        <!-- job post company Start -->
        <div class="job-post-company pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Left Content -->
                    <div class="col-xl-7 col-lg-8">
                        <!-- job single -->
                        <div class="single-job-items mb-50">
                            <div class="job-items">
                                <div class="company-img company-img-details">
                                    <a href="#"><img src="<?= base_url('assets/upload/'.$findjob[0]['foto'] ); ?>" alt="" width="90"></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="#">
                                        <h4><?php echo $findjob[0]['nama_pekerjaan'] ?></h4>
                                    </a>
                                    <ul>
                                        <li><?php echo $findjob[0]['nama_instansi'] ?></li>
                                        <li><i class="fas fa-map-marker-alt"></i><?php echo $findjob[0]['lokasi'] ?></li>
                                        <!-- <li>$3500 - $4000</li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                          <!-- job single End -->
                       
                        <div class="job-post-details">
                            <?php echo $findjob[0]['deskripsi_pekerjaan'] ?>
                            <!-- <div class="post-details1 mb-50"> -->
                                <!-- Small Section Tittle -->
                                <!-- <div class="small-section-tittle">
                                    <h4>Job Description</h4>
                                </div>
                                <p>It is a long established fact that a reader will beff distracted by vbthe creadable content of a page when looking at its layout. The pointf of using Lorem Ipsum is that it has ahf mcore or-lgess normal distribution of letters, as opposed to using, Content here content here making it look like readable.</p>
                            </div>
                            <div class="post-details2  mb-50"> -->
                                 <!-- Small Section Tittle -->
                                <!-- <div class="small-section-tittle">
                                    <h4>Required Knowledge, Skills, and Abilities</h4>
                                </div>
                               <ul>
                                   <li>System Software Development</li>
                                   <li>Mobile Applicationin iOS/Android/Tizen or other platform</li>
                                   <li>Research and code , libraries, APIs and frameworks</li>
                                   <li>Strong knowledge on software development life cycle</li>
                                   <li>Strong problem solving and debugging skills</li>
                               </ul>
                            </div>
                            <div class="post-details2  mb-50"> -->
                                 <!-- Small Section Tittle -->
                                <!-- <div class="small-section-tittle">
                                    <h4>Education + Experience</h4>
                                </div>
                               <ul>
                                   <li>3 or more years of professional design experience</li>
                                   <li>Direct response email experience</li>
                                   <li>Ecommerce website design experience</li>
                                   <li>Familiarity with mobile and web apps preferred</li>
                                   <li>Experience using Invision a plus</li>
                               </ul>
                            </div> -->
                        </div>

                    </div>
                    <!-- Right Content -->
                    <div class="col-xl-4 col-lg-4">
                        <div class="post-details3  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Job Overview</h4>
                           </div>
                          <ul>
                              <li>Posted date : <span><?php 
                              $date=date_create($findjob[0]['posted_date']);
                              echo date_format($date,"d M Y") ?></span></li>
                              <li>Location : <span><?php echo $findjob[0]['lokasi'] ?></span></li>
                              <!-- <li>Vacancy : <span>02</span></li> -->
                              <li>Job nature : <span><?php echo $findjob[0]['jenis_pekerjaan'] ?></span></li>
                              <!-- <li>Salary :  <span>$7,800 yearly</span></li> -->
                              <li>Application date : <span><?php 
                              $date=date_create($findjob[0]['application_date']);
                              echo date_format($date,"d M Y") ?></span></li>
                          </ul>
                            <div class="apply-btn2">
                                <div id="std-apply">

                                </div>
                                <!--<button id="std_apply" onclick="stdalert()" class="btn">Apply Now</button>-->
                            </div>
                       </div>
                        <div class="post-details4  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4><?php echo $findjob[0]['nama_instansi'] ?></h4>
                           </div>
                              <!-- <span>Colorlib</span> -->
                              <?php echo $findjob[0]['deskripsi'] ?>
                            <ul>
                                <li>Name: <span><?php echo $findjob[0]['nama_instansi'] ?> </span></li>
                                <li>Web : <span><?php echo $findjob[0]['website'] ?></span></li>
                                <li>Email: <span><?php echo $findjob[0]['email'] ?></span></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- job post company End -->

    </main>
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
                                     <p>Heaven frucvitful doesn't cover lesser dvsays appear creeping seasons so behold.</p>
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
                                    <p>Address :Your address goes
                                        here, your demo address.</p>
                                    </li>
                                    <li><a href="#">Phone : +8880 44338899</a></li>
                                    <li><a href="#">Email : info@colorlib.com</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href="#"> View Project</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Testimonial</a></li>
                                    <li><a href="#">Proparties</a></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Newsletter</h4>
                                <div class="footer-pera footer-pera2">
                                 <p>Heaven fruitful doesn't over lesser in days. Appear creeping.</p>
                             </div>
                             <!-- Form -->
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
                    </div>
                </div>
               <!--  -->
               <div class="row footer-wejed justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <!-- logo -->
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
                        <!-- Footer Bottom Tittle -->
                        <div class="footer-tittle-bottom">
                            <span>568</span>
                            <p>Talented Hunter</p>
                        </div>
                    </div>
               </div>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="<?= base_url('assets/js/'); ?>vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="<?= base_url('assets/js/'); ?>vendor/jquery-1.12.4.min.js"></script>
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
        <script src="<?= base_url('assets/js/'); ?>jquery.nice-select.min.js"></script>
		<script src="<?= base_url('assets/js/'); ?>jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="<?= base_url('assets/js/'); ?>contact.js"></script>
        <script src="<?= base_url('assets/js/'); ?>jquery.form.js"></script>
        <script src="<?= base_url('assets/js/'); ?>jquery.validate.min.js"></script>
        <script src="<?= base_url('assets/js/'); ?>mail-script.js"></script>
        <script src="<?= base_url('assets/js/'); ?>jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="<?= base_url('assets/js/'); ?>plugins.js"></script>
        <script src="<?= base_url('assets/js/'); ?>main.js"></script>
        <script src="<?= base_url('assets/js/'); ?>mystyle.js"></script>
        <script>
            //localStorage.clear();
            if (localStorage.getItem('user') == 'student') {
                document.getElementById("logout").href="<?php echo base_url("student/login/logout") ?>";
            } else {
                document.getElementById("logout").href="<?php echo base_url("company/login/logout") ?>";
            }
            console.log(<?php $this->session->userdata('UserLog') ?>);
            function stdalert() {
                $('#std_apply').attr('disabled','disabled');
                $.ajax({
                    type: "POST",
                    url: "http://localhost/lowker/student/Find_Job/melamar/",
                    data: {'id_pekerjaan' : <?php echo $findjobs[0]['id'] ?>,
                    'id_perusahaan' : <?php echo $findjobs[0]['id_perusahaan'] ?>,
                    'id_mahasiswa' : <?php echo $this->session->userdata('id') ?>}, 
                    dataType: "html",
                    success: function (result) {
                        console.log(result);
                    },
                    error: function (result, status) {
                        console.log(result);
                    }
                });
            }
            $(document).ready(function () {
                if ("<?php echo $this->session->userdata('id_skill') ?>" == '0') {
                    $("#std-apply").append( '<button id="std_apply" onclick="stdalert()" class="btn" disabled>Lengkapi Data Diri Anda</button>' );
                } else {
                    if ("<?php echo $jml_pelamar; ?>" == null || "<?php echo $jml_pelamar; ?>" == 0 || "<?php echo $jml_pelamar; ?>" == "") {
                        $("#std-apply").append( '<button id="std_apply" onclick="stdalert()" class="btn">Apply Now</button>' )
                    } else {
                        if ("<?php echo($pelamar['status_daftar']); ?>" == null) {
                            $("#std-apply").append( '<button id="std_apply" onclick="stdalert()" class="btn">Apply Now</button>' );
                        }else{
                            if ("<?php echo($pelamar['status_daftar']); ?>" == "1") {
                                $("#std-apply").append( '<button id="std_apply" onclick="#" class="btn lolos" disabled>Lolos Seleksi</button>' );
                            } else if ("<?php echo($pelamar['status_daftar']); ?>" == "2") {
                                $("#std-apply").append( '<button id="std_apply" onclick="#" class="btn lolos" disabled>Lolos Tes</button>' );
                            } else if ("<?php echo($pelamar['status_daftar']); ?>" == "3") {
                                $("#std-apply").append( '<button id="std_apply" onclick="#" class="btn lolos" disabled>Lolos Interview</button>' );
                            } else if("<?php echo($pelamar['status_daftar']); ?>" == "4") {
                                $("#std-apply").append( '<button id="std_apply" onclick="stdalert()" class="btn gagal" disabled>Tidak Lolos</button>' );
                            } else {
                                $("#std-apply").append( '<button id="std_apply" onclick="stdalert()" class="btn" disabled>Applied</button>' );
                            }
                        }
                    }
                }
            });
        </script>
    </body>
</html>
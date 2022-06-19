
<?php echo "<script>console.log('" . json_encode($skill) . "');</script>"; ?>
<?php echo "<script>console.log('" . $this->session->userdata('nim') . "');</script>"; ?>


    <main>
        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="<?= base_url('assets/'); ?>img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Get your job</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
        <!-- Job List Area Start -->
        <div class="job-listing-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <!-- Left content -->
                    <div class="col-xl-3 col-lg-3 col-md-4">
                        <div class="row">
                            <div class="col-12">
                                    <div class="small-section-tittle2 mb-45">
                                    <div class="ion"> <svg 
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="20px" height="12px">
                                    <path fill-rule="evenodd"  fill="rgb(27, 207, 107)"
                                        d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"/>
                                    </svg>
                                    </div>
                                    <h4>Filter Jobs</h4>
                                </div>
                            </div>
                        </div>
                        <!-- Job Category Listing start -->
                        <div class="job-category-listing mb-50" style="padding: 30px 19px 60px 30px;">
                            <!-- single one -->
                            <div class="single-listing">
                               <div class="small-section-tittle2">
                                     <h4>Skill</h4>
                               </div>
                                <!-- Select job items start -->
                                <div class="select-job-items2">
                                    <select name="select" id='skill_select'>
                                        <option value="">All Category</option>
                                        <?php
                                            $no = 1;
                                            if ($skill) :
                                                foreach ($skill as $data) :
                                                    ?>
                                                    <option value="<?php echo $data['id'] ?>"><?php echo $data['nama_skill'] ?></option>
                                                <?php endforeach;
                                                else : ?>
                                                <tr>
                                                    <td colspan="8" class="text-center">No Job Data</td>
                                                </tr>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <!--  Select job items End-->
                                <!-- select-Categories start -->
                                <div class="select-Categories pt-80 pb-50">
                                    <div class="small-section-tittle2">
                                        <h4>Job Type</h4>
                                    </div>
                                    <label class="container">Full Time
                                        <input type="checkbox" value="Full-Time" class="job_type" name="job_type">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container">Part Time
                                        <input type="checkbox" value="Part-Time" class="job_type" name="job_type">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <!-- select-Categories End -->
                            </div>
                            <!-- single two -->
                            <div class="single-listing">
                               <div class="small-section-tittle2">
                                     <h4>Job Location</h4>
                               </div>
                                <!-- Select job items start -->
                                <div class="select-job-items2">
                                    <select name="select" id="job_location">
                                        <option value="">Anywhere</option>
                                        <option value="Malang">Malang</option>
                                        <option value="Purwakarta">Purwakarta</option>
                                        <option value="Surabaya">Surabaya</option>
                                        <option value="Jakarta">Jakarta</option>
                                    </select>
                                </div>
                                <!--  Select job items End-->
                            </div> 

                            <!-- <div class="single-listing">
                                <button id="filter" class="btn head-btn1" style="margin-top: 50px;" onclick="filter()">Simpan</button>
                            </div>  -->
                        </div>
                        <!-- Job Category Listing End -->
                    </div>
                    <!-- Right content -->
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <!-- Featured_job_start -->
                        <section class="featured-job-area">
                            <div class="container">
                                <!-- Count of Job list Start -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="count-job mb-35">
                                            <!-- <span>39, 782 Jobs found</span> -->
                                            <!-- Select job items start -->
                                            <!-- <div class="select-job-items">
                                                <span>Sort by</span>
                                                <select name="select">
                                                    <option value="">None</option>
                                                    <option value="">job list</option>
                                                    <option value="">job list</option>
                                                    <option value="">job list</option>
                                                </select>
                                            </div> -->
                                            <!--  Select job items End-->
                                        </div>
                                    </div>
                                </div>
                                <!-- Count of Job list End -->
                                <?php
                                    if ($this->session->userdata('id_skill') == null) {
                                        echo '<a href="http://localhost/lowker/student/profile" class="genric-btn primary btn_lengkapi">Lengkapi Profil Anda</a>';
                                    } 
                                ?>
                                <div id="Find_Job">

                                </div>
                                <?php
                                    // $no = 1;
                                    // if ($findjob) :
                                    //     foreach ($findjob as $key => $data) :
                                    //         ?>
                                            <!-- single-job-content -->
                                            <!-- <div class="single-job-items mb-30">
                                                <div class="job-items">
                                                    <div class="company-img">
                                                        <a href="<?= base_url('student/Find_Job/detail_job/'.$data->id); ?>"><img src="<?= base_url('assets/upload/'.$data->foto); ?>" alt="" width="96"></a>
                                                    </div>
                                                    <div class="job-tittle job-tittle2">
                                                        <a href="<?= base_url('student/Find_Job/detail_job/'.$data->id); ?>">
                                                            <h4><?= $data->nama_pekerjaan ?></h4>
                                                        </a>
                                                        <ul>
                                                            <li><?= $data->nama_instansi ?></li>
                                                            <li><i class="fas fa-map-marker-alt"></i><?= $data->lokasi ?></li> -->
                                                            <!--<li>$3500 - $4000</li>-->
                                                        <!-- </ul>
                                                    </div>
                                                </div>
                                                <div class="items-link items-link2 f-right">
                                                    <a href="<?= base_url('student/Find_Job/detail_job/'.$data->id); ?>"><?= $data->jenis_pekerjaan ?></a>
                                                    <span><?= $data->posted_date ?></span>
                                                </div>
                                            </div> -->
                                        <?php //endforeach;
                                        //else : ?>
                                        <!-- <tr>
                                            <td colspan="8" class="text-center">No Job Data</td>
                                        </tr> -->
                                <?php //endif; ?>
                            </div>
                        </section>
                        <!-- Featured_job_end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Job List Area End -->
        <!--Pagination Start  -->
        <div class="pagination-area pb-115 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-wrap d-flex justify-content-center">
                            <nav aria-label="Page navigation example">
                                <!-- <ul class="pagination justify-content-start">
                                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                                </ul> -->
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Pagination End  -->
        
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
        <script>
            if (localStorage.getItem('user') == 'student') {
                document.getElementById("logout").href="<?php echo base_url("student/login/logout") ?>";
            } else {
                document.getElementById("logout").href="<?php echo base_url("student/login/logout") ?>";
            }
            console.log(<?php $this->session->userdata('UserLog') ?>);
        </script>
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
        <script>
            //localStorage.clear();
            function filter() {
                console.log('poso poso')
            }
            // document.getElementById("filter").addEventListener("click", function() {
            //     console.log('ss')
            // });

            $('#skill_select').on('change', function() {
                filter();
                //alert($("#skill_select").val() +','+ ($('#job_type:checked').val() == 'undefined') ? '' : $('#job_type:checked').val() +','+ $("#job_location").val());
                // console.log($("#skill_select").val());
                 console.log(($('#job_type:checked').val() == undefined) ? '' : $('#job_type:checked').val());
                // console.log($("#job_location").val());
            });

            $('#job_location').on('change', function() {
                filter();
                //alert($("#skill_select").val() +','+ ($('#job_type:checked').val() == 'undefined') ? '' : $('#job_type:checked').val() +','+ $("#job_location").val());
                // console.log($("#skill_select").val());
                 console.log(($('#job_type:checked').val() == undefined) ? '' : $('#job_type:checked').val());
                // console.log($("#job_location").val());
            });

            $('.job_type').change(function() {
                filter();   
                // console.log($("#skill_select").val());
                console.log(($('.job_type:checked').val() == undefined) ? '' : $('.job_type:checked').val());
                // console.log($("#job_location").val());   
            });

            if (<?php echo($this->session->userdata('id_skill')) ?> != null) {
                /* Syntax untuk mengambil php lalu dari string diubah ke array */
                //njupuk skill ndek lokal
                const str = "<?php echo($this->session->userdata('id_skill')) ?>";

                const arr = str.split(',');

                /* fungsi console untuk menampilkan hasil dari variable arr ke konsol */
                console.log(arr);

                var arr_skill
                //dari array di for nama fungsie myfunction
                arr.forEach(myFunction);

                //didalam fungsi sudah terdapat value index array lalu di if diulangi sebanyak pekerjaan yang sama
                function myFunction(value, index, array) {
                    if (arr_skill == "" || arr_skill == null) {
                        arr_skill = "pekerjaan.id_skill LIKE '%" + value +"%'";
                    } else {
                        arr_skill = arr_skill + " OR pekerjaan.id_skill LIKE '%" + value+"%'";
                    } 
                }

                console.log(arr_skill);
            }

            function filter() {
                var id_skill = ($("#skill_select").val() == '') ? '' : "pekerjaan.id_skill LIKE '%" + $("#skill_select").val() + "%'"
                var jenis_pekerjaan = ($('.job_type:checked').val() == undefined) ? '' : "pekerjaan.jenis_pekerjaan = '" + $('.job_type:checked').val() + "'";
                var lokasi = ($("#job_location").val() == '') ? '' : "pekerjaan.lokasi = '" + $("#job_location").val() + "'";
                console.log(id_skill + jenis_pekerjaan + lokasi);
                $.ajax({
                    type: "POST",
                    url: "http://localhost/lowker/student/Find_Job/filter/",
                    data: {
                        'id_skill' : id_skill,
                        'jenis_pekerjaan' : jenis_pekerjaan,
                        'lokasi' : lokasi
                    },
                    dataType: "html",
                    success: function (result) {
                        //console.log(result);
                        $('#Find_Job').html(result);
                    },
                    error: function (result, status) {
                        console.log(result);
                    }
                });
            }
            

            /* fungsi untuk menampilkan data dari database ke select2 */ 
            //$('#id_skill').val(arr).change();
            
            // if (<?php echo($this->session->userdata('id_skill')) ?> == null) {
            //     function listjob() {
            //         $.ajax({
            //             type: "POST",
            //             url: "http://localhost/lowker/student/Find_Job/list_job/",
            //             // data: {'id_skill' : arr_skill},
            //             // dataType: "html",
            //             success: function (result) {
            //                 //console.log(result);
            //                 $('#Find_Job').append(result);
            //             },
            //             error: function (result, status) {
            //                 console.log(result);
            //             }
            //         });
            //     }
            // } else {
            //     function listjob() {
            //         $.ajax({
            //             type: "POST",
            //             url: "http://localhost/lowker/student/Find_Job/list_job/",
            //             data: {'id_skill' : arr_skill},
            //             dataType: "html",
            //             success: function (result) {
            //                 //console.log(result);
            //                 $('#Find_Job').append(result);
            //             },
            //             error: function (result, status) {
            //                 console.log(result);
            //             }
            //         });
            //     }
            // }
            $(document).ready(function () {
                //console.log(arr_skill);
                if (<?php echo($this->session->userdata('id_skill')) ?> == '0') {
                    (function(){
                        $.ajax({
                            type: "POST",
                            url: "http://localhost/lowker/student/Find_Job/list_job/",
                            // data: {'id_skill' : arr_skill},
                            // dataType: "html",
                            success: function (result) {
                                //console.log(result);
                                $('#Find_Job').html(result);
                                console.log(result);
                            },
                            error: function (result, status) {
                                console.log(result);
                            }
                        });
                    })();
                } else {
                    (function(){
                        $.ajax({
                            type: "POST",
                            url: "http://localhost/lowker/student/Find_Job/list_job/",
                            data: {'id_skill' : arr_skill},
                            dataType: "html",
                            success: function (result) {
                                //console.log(result);
                                $('#Find_Job').html(result);
                            },
                            error: function (result, status) {
                                console.log(result);
                            }
                        });
                    })();
                }
            });
        </script>
        
    </body>
</html>
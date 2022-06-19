<?php echo "<script>console.log('" . json_encode($job[0]->id_pekerjaan) . "');</script>"; ?>
<body id="page-top">

            <!-- Page Wrapper -->
            <div id="wrapper">

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">
                
                    <!-- Main Content -->
                    <div id="content">
                <?php $this->load->view('company/layout/topbar'); ?><div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm mb-4 border-bottom-primary">
                        <div class="card-header bg-white py-3">
                            <div class="row">
                                <div class="col">
                                    <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                                        Edit Job List Form
                                    </h4>
                                </div>
                                <div class="col-auto">
                                    <a href="<?= base_url('company/Job_List') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
                        <div class="card-body pb-2">
                            <?= $this->session->flashdata('pesan'); ?>
                            <form action="<?php echo base_url('company/Job_List/edit/'.$job[0]->id_pekerjaan) ?>" class="form" method="post">
                                <input value=<?php echo(json_encode($job[0]->id_perusahaan)); ?> type="hidden" name="id" >
                                <div class="row form-group">
                                    <label class="col-md-4 text-md-right" for="nama_pekerjaan">Job Name</label>
                                    <div class="col-md-6">
                                        <input value=<?php echo(json_encode($job[0]->nama_pekerjaan)); ?> type="text" id="nama_pekerjaan" name="nama_pekerjaan" class="form-control" placeholder="Job Name">
                                        <?= form_error('nama_pekerjaan', '<span class="text-danger small">', '</span>'); ?>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-4 text-md-right" for="lokasi">Location</label>
                                    <div class="col-md-6">
                                        <input value=<?php echo(json_encode($job[0]->lokasi)); ?> type="text" id="lokasi" name="lokasi" class="form-control" placeholder="Location">
                                        <?= form_error('lokasi', '<span class="text-danger small">', '</span>'); ?>
                                    </div>
                                </div>
                                <!-- <div class="row form-group">
                                    <label class="col-md-4 text-md-right" for="posted_date">Posted Date</label>
                                    <div class="col-md-6">
                                        <input type="date" id="posted_date" name="posted_date" class="form-control" >
                                        <?= form_error('posted_date', '<span class="text-danger small">', '</span>'); ?>
                                    </div>
                                </div> -->
                                <div class="row form-group">
                                    <label class="col-md-4 text-md-right" for="deskripsi_pekerjaan">Job Description</label>
                                    <div class="col-md-6">
                                        <!-- <textarea type="text" id="deskripsi_pekerjaan" name="deskripsi_pekerjaan" class="form-control"></textarea>
                                        <?= form_error('deskripsi_pekerjaan', '<span class="text-danger small">', '</span>'); ?> -->
                                        <textarea id="summernote" name="deskripsi_pekerjaan" value></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label class="col-md-4 text-md-right" for="tingkat_pekerjaan">Career-Level</label>
                                    <div class="col-md-6">
                                        <input value=<?php echo(json_encode($job[0]->tingkat_pekerjaan)); ?> type="text" id="tingkat_pekerjaan" name="tingkat_pekerjaan" class="form-control" placeholder="Career Level">
                                    <?= form_error('tingkat_pekerjaan', '<span class="text-danger small">', '</span>'); ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-md-4 text-md-right" for="jenis_pekerjaan">Job Type</label>
                                <div class="col-md-6">
                                    <div class="custom-control custom-radio">
                                        <?php if($job[0]->jenis_pekerjaan=='Full-Time')
                                        {
                                            echo '<input '.set_radio('jenis_pekerjaan', 'Full-Time').' value="Full-Time" type="radio" id="fulltime" name="jenis_pekerjaan" class="custom-control-input" checked>';
                                        } else { 
                                            echo '<input '.set_radio('jenis_pekerjaan', 'Full-Time').' value="Full-Time" type="radio" id="fulltime" name="jenis_pekerjaan" class="custom-control-input">' ;
                                            } 
                                        ?>
                                        <label class="custom-control-label" for="fulltime">Full-Time</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <?php if($job[0]->jenis_pekerjaan=='Part-Time')
                                        {
                                            echo '<input '.set_radio('jenis_pekerjaan', 'Part-Time').' value="Part-Time" type="radio" id="parttime" name="jenis_pekerjaan" class="custom-control-input" checked>';
                                        } else { 
                                            echo '<input '.set_radio('jenis_pekerjaan', 'Part-Time').' value="Part-Time" type="radio" id="parttime" name="jenis_pekerjaan" class="custom-control-input">' ;
                                            } 
                                        ?>
                                        <label class="custom-control-label" for="parttime">Part-Time</label>
                                    </div>
                                    <?= form_error('jenis_kelamin', '<span class="text-danger small">', '</span>'); ?>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="col-md-4 text-md-right" for="nama_skill">Job Skill</label>
                                <div class="col-md-6">
                                    <select id="id_skill" name="id_skill[]" class="form-control" multiple="multiple">
                                        <option value=""></option>
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
                                <label class="col-md-4 text-md-right" for="application_date">Application Date</label>
                                <div class="col-md-6">
                                    <input type="date" id="application_date" name="application_date" class="form-control" value=<?php echo(json_encode($job[0]->application_date)); ?>>
                                    <?= form_error('application_date', '<span class="text-danger small">', '</span>'); ?>
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
            
            
        </div>
        <!-- End of Content Wrapper -->
        
        <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
        </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

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
                    <a class="btn btn-primary" href="<?php echo base_url('company/login/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/admin/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/admin/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/admin/'); ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/admin/'); ?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/admin/'); ?>js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/demo/chart-pie-demo.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function () {
            /* Inisialisasi select2 */
            $("#id_skill").select2({
                placeholder: "Silahkan Pilih"
            });

            /* Syntax untuk mengambil php lalu dari string diubah ke array */
            const str = <?php echo(json_encode($job[0]->id_skill)) ?>;
            const arr = str.split(',');

            /* fungsi console untuk menampilkan hasil dari variable arr ke konsol */
            console.log(<?php echo(json_encode($job[0]->id_skill)) ?>);

            /* fungsi untuk menampilkan data dari database ke select2 */ 
            $('#id_skill').val(arr).change();

            /* Inisialisasi summernote/desktipsi job */
            $('#summernote').summernote({
                placeholder: 'Please Insert Job Description',
                name: 'job-deskripsi',
                toolbar: [    
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],       
                    ['insert',['picture']]
                ],
            });
            $('#summernote').summernote('code', <?php echo(json_encode($job[0]->deskripsi_pekerjaan)); ?>);
        });
    </script>

    </body>

</html>
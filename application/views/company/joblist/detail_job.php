
<body id="page-top">

<?php echo "<script>console.log('" . json_encode($job) . "');</script>"; ?>
<?php echo "<script>console.log('" . json_encode($skill) . "');</script>"; ?>

<!-- Page Wrapper -->
<div id="wrapper">

    <?php 
        $sidebar['data'] = "joblist";
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
                            Detail Job
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('company/Job_List/') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
                <?php
                if ($job) :
                    foreach ($job as $key => $data) :
                        ?>
                        <?= form_open('', [], ['id' => $data->id_pekerjaan]); ?>
                            <table class="table table-bordered no-margin">
                                <tbody>
                                    <tr>
                                        <th style="width: 35%;">Job Name</th>
                                        <td><span id="nim"></span><?= $data->nama_pekerjaan;?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 35%;">Company Name</th>
                                        <td><span id="nama"></span><?= $data->nama_instansi;?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 35%;">Location</th>
                                        <td><span id="alamat"></span><?= $data->lokasi;?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 35%;">Posted Date</th>
                                        <td><span id="email"></span><?= $data->posted_date;?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 35%;">Job Description</th>
                                        <td><span id="fax"></span><?= $data->deskripsi_pekerjaan;?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 35%;">Career Level</th>
                                        <td><span id="website"></span><?=  $data->tingkat_pekerjaan;?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 35%;">Job type</th>
                                        <td><span id="deskripsi"></span><?= $data->jenis_pekerjaan;?></td>
                                    </tr>
                                    <tr>
                                        <th style="width: 35%;">Job Skill</th>
                                        <td><span id="deskripsi"></span>
                                            <!-- <?= $data->nama_skill;?> -->
                                            <?php
                                            if ($skill) :
                                                foreach ($skill as $key1 => $data1) :
                                                    ?>
                                                    <?= $data1->nama_skill ?> <br>
                                                    <?php endforeach;
                                                else : ?>
                                                No Skill Data
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width: 35%;">Application Date</th>
                                        <td><span id="deskripsi"></span><?= $data->application_date;?></td>
                                    </tr>
                                </tbody>
                            </table>
                        <?= form_close(); ?>
                    <?php endforeach;
                    else : ?>
                    <tr>
                        <td colspan="8" class="text-center">No Job Data</td>
                    </tr>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
</div>
        

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
                    <a class="btn btn-primary" href="<?php echo base_url('admin/login/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/admin/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/admin/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/admin/'); ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/admin/'); ?>vendor/chart.js/Chart.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/datatables/buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/datatables/buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/datatables/jszip/jszip.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/datatables/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/datatables/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/datatables/buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/datatables/buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/datatables/buttons/js/buttons.colVis.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/datatables/responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/datatables/responsive/js/responsive.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/admin/'); ?>js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>js/demo/chart-pie-demo.js"></script>

    <script>
        $(document).ready(function () {
            $("#id_skill").select2({
                placeholder: "Silahkan Pilih"
            });

            
            let str = 'Hello';
            
            str = str.substring(1);
            console.log(str);

            var table = $('#dataTable').DataTable({
                buttons: ['copy', 'csv', 'print', 'excel', 'pdf'],
                dom: "<'row px-2 px-md-4 pt-2'<'col-md-3'l><'col-md-5 text-center'B><'col-md-4'f>>" +
                    "<'row'<'col-md-12'tr>>" +
                    "<'row px-2 px-md-4 py-3'<'col-md-5'i><'col-md-7'p>>",
                lengthMenu: [
                    [5, 10, 25, 50, 100, -1],
                    [5, 10, 25, 50, 100, "All"]
                ],
                columnDefs: [{
                    targets: -1,
                    orderable: false,
                    searchable: false
                }]
            });

            table.buttons().container().appendTo('#dataTable_wrapper .col-md-5:eq(0)');
        });
    </script>

    </body>

</html>
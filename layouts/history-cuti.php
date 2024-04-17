<?php 
include 'layouts/session.php';

if (!isset($_SESSION["username"])) {
	header('Location:error-500.php');
	exit;
}

$id_user=$_SESSION["id_user"];
$username=$_SESSION["username"];
$nama=$_SESSION["nama"];
$email=$_SESSION["email"];



?>
<?php include 'layouts/main.php'; ?>

<head>
    <title>ESS | Employee Self Service</title>
    <?php include 'layouts/title-meta.php'; ?>
    <!-- Datatables css -->
    <link href="assets/vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
    <?php include 'layouts/head-css.php'; ?>


</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?php include 'layouts/menu.php'; ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Employees</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Personal </a></li>
                                        <li class="breadcrumb-item active">Cuti & Izin</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Cuti & Izin</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
                                            <a class="navbar-brand" href="#"><font color="#EC008C"><strong>History Permohonan Cuti</strong></font>
                                        </nav><br>

                                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>No Pengajuan</th>
                                                <th>NIP</th>
                                                <th>Nama</th>
                                                <th>Subject</th>
                                                <th>Cuti/Izin</th>
                                                <th>Jml Hari</th>
												<th>Tanggal Cuti</th>
												<th>Tgl Approval</th>
												<th>Status</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>1013596</td>
                                                <td>Dwi Fitriyanto</td>
                                                <td>Izin Cuti</td>
                                                <td>Izin (sakit 1 hari)</td>
                                                <td>1</td>
											  <td>15-02-2024</td>
												<td>15-02-2024 12:30</td>
												<td>
													<a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-settings-3-line"></i></a>
                                                    <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
												</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>1013596</td>
                                                <td>Dwi Fitriyanto</td>
                                                <td>Izin Cuti</td>
                                                <td>Izin (sakit 1 hari)</td>
                                                <td>1</td>
												<td>15-02-2024</td>
												<td>15-02-2024 12:30</td>
												<td>
													<a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-settings-3-line"></i></a>
                                                    <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
												</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>1013596</td>
                                                <td>Dwi Fitriyanto</td>
                                                <td>Izin Cuti</td>
                                                <td>Izin (sakit 1 hari)</td>
                                                <td>1</td>
												<td>15-02-2024</td>
												<td>15-02-2024 12:30</td>
												<td>
													<a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-settings-3-line"></i></a>
                                                    <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
												</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>1013596</td>
                                                <td>Dwi Fitriyanto</td>
                                                <td>Izin Cuti</td>
                                                <td>Izin (sakit 1 hari)</td>
                                                <td>1</td>
												<td>15-02-2024</td>
												<td>15-02-2024 12:30</td>
												<td>
													<a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-settings-3-line"></i></a>
                                                    <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
												</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>1013596</td>
                                                <td>Dwi Fitriyanto</td>
                                                <td>Izin Cuti</td>
                                                <td>Izin (sakit 1 hari)</td>
                                                <td>1</td>
												<td>15-02-2024</td>
												<td>15-02-2024 12:30</td>
												<td>
													<a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-settings-3-line"></i></a>
                                                    <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
												</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>1013596</td>
                                                <td>Dwi Fitriyanto</td>
                                                <td>Izin Cuti</td>
                                                <td>Izin (sakit 1 hari)</td>
                                                <td>1</td>
												<td>15-02-2024</td>
												<td>15-02-2024 12:30</td>
												<td>
													<a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-settings-3-line"></i></a>
                                                    <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
												</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div> <!-- end row-->
                </div> <!-- container -->

            </div> <!-- content -->

            <?php include 'layouts/footer.php'; ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>

    </div>
    <!-- END wrapper -->


    <?php include 'layouts/right-sidebar.php'; ?>

    <?php include 'layouts/footer-scripts.php'; ?>

    <!-- Datatables js -->
    <script src="assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

    <!-- Datatable Demo Aapp js -->
    <script src="assets/js/pages/demo.datatable-init.js"></script>
    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Personal</a></li>
                                        <li class="breadcrumb-item active">Permohonan Karyawan</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Permohonan Karyawan</h4>
                            </div>
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
                                            <a class="navbar-brand" href="#"><font color="#EC008C"><strong>Form Permohonan Karyawan</strong></font>
                                        </nav><br>
										<div class="row">
                                        <div class="col-lg-6">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">NIP</label>
                                                    <input type="text" class="form-control" id="example-disable" disabled="" value="1013596">
                                                </div>
												
												<div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Nama Pegawai</label>
                                                    <input type="text" class="form-control" readonly id="example-disable" disabled="" value="Dwi Fitriyanto">
                                                </div>
												
												<div class="mb-3">
                                                    <label for="example-email" class="form-label">Job Title</label>
                                                    <input type="email" id="example-email" name="example-email" class="form-control" disabled="" value="IT Development & Information System Head">
                                                </div>
												
												<div class="mb-3">
                                                    <label for="example-email" class="form-label">Organization</label>
                                                    <input type="email" id="example-email" name="example-email" class="form-control" disabled="" value="IT Division">
                                                </div>
												
												<div class="mb-3">
                                                    <label for="example-email" class="form-label">Alamat Email</label>
                                                    <input type="email" id="example-email" name="example-email" class="form-control" disabled="" value="dwi.fitriyanto@miegacoan.co.id">
                                                </div>
												
												<div class="mb-3">
                                                    <label for="example-email" class="form-label">No. Telphone</label>
                                                    <input type="email" id="example-email" name="example-email" class="form-control" disabled="" value="08111181841">
                                                </div>
                                            </form>
                                        </div> <!-- end col -->

                                        <div class="col-lg-6">
                                            <form>

												<div class="mb-3">
                                                    <label for="example-date" class="form-label">Tanggal Pengajuan</label>
                                                    <input class="form-control" id="example-date" type="date" name="date">
                                                </div>
												
												<div class="mb-3">
                                                    <label for="example-select" class="form-label">Jabatan (berdasarkan MPP)</label>
                                                    <select class="form-select" id="example-select">
														<option></option>
                                                      	<option>IT Specialist</option>
                                                        <option>Talent Acquisition Specialist</option>
														<option>Recruitment Specialist</option>
                                                    </select>
                                                </div>
												
												<div class="mb-3">
                                                    <label for="example-select" class="form-label">Grading</label>
													    <div class="mt-2">
															<div class="form-check form-check-inline">
																<input type="checkbox" class="form-check-input" id="customCheck4">
																<label class="form-check-label" for="customCheck4">C4</label>
															</div>
															<div class="form-check form-check-inline">
																<input type="checkbox" class="form-check-input" id="customCheck3">
																<label class="form-check-label" for="customCheck3">C3</label>
															</div>
															<div class="form-check form-check-inline">
																<input type="checkbox" class="form-check-input" id="customCheck2">
																<label class="form-check-label" for="customCheck2">C2</label>
															</div>
															<div class="form-check form-check-inline">
																<input type="checkbox" class="form-check-input" id="customCheck12">
																<label class="form-check-label" for="customCheck12W">C1</label>
															</div>
															<div class="form-check form-check-inline">
																<input type="checkbox" class="form-check-input" id="customCheck41">
																<label class="form-check-label" for="customCheck41">B3</label>
															</div>
															<div class="form-check form-check-inline">
																<input type="checkbox" class="form-check-input" id="customCheck42">
																<label class="form-check-label" for="customCheck42">B2</label>
															</div>
															<div class="form-check form-check-inline">
																<input type="checkbox" class="form-check-input" id="customCheck43">
																<label class="form-check-label" for="customCheck43">B1</label>
															</div>
                                    			</div><br>
													
													<div class="mb-3">
                                                    <label for="example-select" class="form-label">Keterangan</label>
													    <div class="mt-2">
															<div class="form-check form-check-inline">
																<input type="checkbox" class="form-check-input" id="customCheck4">
																<label class="form-check-label" for="customCheck4">Pengganti</label>
															</div>
															<div class="form-check form-check-inline">
																<input type="checkbox" class="form-check-input" id="customCheck3">
																<label class="form-check-label" for="customCheck3">Buffer/Stock</label>
															</div>
															<div class="form-check form-check-inline">
																<input type="checkbox" class="form-check-input" id="customCheck2">
																<label class="form-check-label" for="customCheck2">Penambahan (Posisi Baru)</label>
															</div>
                                    			</div><br>
														
												<div class="mb-3">
                                                    <label for="example-email" class="form-label">Jumlah</label>
                                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="">
                                                </div>
       
                                                </div>
												<div class="mb-3">
                                                    <label for="example-select" class="form-label">Penempatan</label>
                                                    <select class="form-select" id="example-select">
														<option></option>
                                                      	<option>HO-Malang</option>
                                                        <option>Menara BCA Jakarta</option>
														<option>Store</option>
                                                    </select>
                                                </div>
												<div class="mb-3">
                                                    <label for="example-email" class="form-label">Nama Store</label>
                                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="">
                                                </div>
													
												<div class="mb-3">
                                                    <label for="example-date" class="form-label">Target Pemenuhan</label>
                                                    <input class="form-control" id="example-date" type="date" name="date">
                                                </div>
												
												<div class="mb-3">
                                                    <label for="example-email" class="form-label">PIC Recruitment</label>
                                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="">
                                                </div>
													
												<div class="mb-3">
                                                    <label for="example-select" class="form-label">Bertanggung Jawab Ke</label>
                                                    <select class="form-select" id="example-select">
														<option></option>
                                                      	<option>Head Of IT</option>
                                                        <option>IT Development & Information System Manager</option>
                                                    </select>
                                                </div>
													
												<div class="mb-3">
                                                    <label for="example-select" class="form-label">Pendidikan Minimal</label>
                                                    <select class="form-select" id="example-select">
														<option></option>
                                                      	<option>S2</option>
                                                        <option>S1</option>
														<option>D3</option>
                                                        <option>SMA/STM</option>
                                                    </select>
                                                </div>
												
												<div class="mb-3">
                                                    <label for="example-select" class="form-label">Jenis Kelamin</label>
														<div class="mt-2">
														<div class="form-check form-check-inline">
															<input type="checkbox" class="form-check-input" id="customCheck5" checked disabled>
															<label class="form-check-label" for="customCheck5">Pria</label>
														</div>
														<div class="form-check form-check-inline">
															<input type="checkbox" class="form-check-input" id="customCheck6" disabled>
															<label class="form-check-label" for="customCheck6">Wanita</label>
														</div>
                                   					 </div>
                                                </div>
													
													<div class="mb-3">
                                                    <label for="example-email" class="form-label">Usia</label>
                                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="">
                                                </div>
													
												<div class="mb-3">
                                                    <label for="example-select" class="form-label">Status</label>
														<div class="mt-2">
														<div class="form-check form-check-inline">
															<input type="checkbox" class="form-check-input" id="customCheck5" checked disabled>
															<label class="form-check-label" for="customCheck5">Single</label>
														</div>
														<div class="form-check form-check-inline">
															<input type="checkbox" class="form-check-input" id="customCheck6" disabled>
															<label class="form-check-label" for="customCheck6">Tidak di Persyaratkan</label>
														</div>
                                   					 </div>
                                                </div>
													
												<div class="mb-3">
                                                    <label for="example-email" class="form-label">Range Salary</label>
                                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="">
                                                </div


												<div class="mb-3">
                                                    <label for="example-textarea" class="form-label">Pengalaman Kerja syarat lain lain (Kualifikasi Tambahan)</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                                </div>
												<div class="mb-3">
                                                    <label for="example-textarea" class="form-label">Job description</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                                </div>
                                            </form>
											<button type="submit" class="btn btn-primary">Submit</button>
											<button type="submit" class="btn btn-primary">Cancel</button>
                                        </div> <!-- end col -->

                                    </div>
                                   
                            </div> <!-- end col -->

                        </div>
                        <!-- end row -->
                        <!-- end row -->
                        <!-- end row -->

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
        
        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
    </body>
</html>
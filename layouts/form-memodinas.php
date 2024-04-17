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
                                        <li class="breadcrumb-item active">Memo Dinas</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Memo Dinas</h4>
                            </div>
                        </div>
                    </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        
                                        <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
                                            <a class="navbar-brand" href="#"><font color="#EC008C"><strong>Form Memo Dinas</strong></font>
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
                                                    <label for="example-select" class="form-label">Tipe Pengajuan</label>
                                                    <select class="form-select" id="example-select">
														<option></option>
                                                      <option>Persetujuan Biaya</option>
                                                        <option>Persetujuan Umum</option>
                                                    </select>
                                                </div>
												<div class="mb-3">
                                                    <label for="example-select" class="form-label">No Memo Dinas</label>
                                                    <input type="email" id="example-email" name="example-email" class="form-control" placeholder="" disabled="" value="123/HCCA/M/2024">
                                                </div>
												<div class="mb-3">
                                                    <label for="example-date" class="form-label">Tanggal Penyelesaian</label>
                                                    <input class="form-control" id="example-date" type="date" name="date">
                                                </div>
												<div class="mb-3">
                                                    <label for="example-select" class="form-label">Prioritas</label>
                                                    <select class="form-select" id="example-select">
														<option></option>
                                                      	<option>Biasa</option>
                                                        <option>Penting</option>
														<option>Sangat Penting</option>
                                                    </select>
                                                </div>
												<div class="mb-3">
                                                    <label for="example-date" class="form-label">Tanggal Penyelesaian</label>
                                                    <input class="form-control" id="example-date" type="date" name="date">
                                                </div>
												<div class="mb-3">
                                                    <label for="example-textarea" class="form-label">Perihal</label>
                                                    <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                                </div>
												<div class="mb-3">
                                                    <label for="example-fileinput" class="form-label">Dokumen</label>
                                                    <input type="file" id="example-fileinput" class="form-control">
                                                </div>
												<div class="mb-3">
                                                    <label for="example-email" class="form-label">Reviewer Divisi (Optional)</label><br>
													<button type="submit" class="btn btn-primary">&nbsp;Tambah Reviewer </button>&nbsp;<button type="submit" class="btn btn-primary">&nbsp;Clear</button>
                                                    <input type="email" id="example-email" name="example-email"  class="form-control" disabled="" value="">
												</div>
												<div class="mb-3">
                                                    <label for="example-email" class="form-label">Pihak Tujuan (Optional)</label><br>
													<button type="submit" class="btn btn-primary">&nbsp;Tambah Individu </button>&nbsp;<button type="submit" class="btn btn-primary">&nbsp;Clear</button>
                                                    <input type="email" id="example-email" name="example-email"  class="form-control" disabled="" value="">
												</div>
												<div class="mb-3">
                                                    <label for="example-email" class="form-label">Pihak Approval (Optional)</label><br>
													<button type="submit" class="btn btn-primary">&nbsp;Tambah Approval </button>
                                                    <input type="email" id="example-email" name="example-email"  class="form-control" disabled="" value="">
												</div>
												<div class="mb-3">
                                                    <label for="example-textarea" class="form-label">Pengantar</label>
                                                    <textarea class="form-control" id="snow-editor" rows="5"></textarea>
												</div>
													
												<div class="mb-3">
                                                    <label for="example-textarea" class="form-label">Isi / Tujuan</label>
                                                    <textarea class="form-control" id="snow-editor" rows="5"></textarea>
												</div>

                                            </form>
											<button type="submit" class="btn btn-primary">Priview</button> <button type="submit" class="btn btn-primary">Cancel</button>
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
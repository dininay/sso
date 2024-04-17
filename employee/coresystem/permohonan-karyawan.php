<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Enzo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Enzo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <title>ESS - Employee Self Service</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  </head>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
		<?php
		include '../layouts/top-sidebar.php'
		?>
      <!-- Page Header Ends-->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
		<?php
		  include '../layouts/right-sidebar.php'
		?>

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Form Permohonan Karyawan</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item"> Form Layout</li>
                    <li class="breadcrumb-item active"> Form Permohonan Karyawan</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12 col-xl-6">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-body">
                        <form class="theme-form">
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputEmail1">NIP</label>
                            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="1013596" readonly>
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputPassword1">Nama Pegawai</label>
                            <input class="form-control" id="exampleInputPassword1" type="text" placeholder="Dwi Fitriyanto" readonly>
                          </div>
						  <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputPassword1">Job Title</label>
                            <input class="form-control" id="exampleInputPassword1" type="text" placeholder="IT Enterprise Application Development Division Head" readonly>
                          </div>
						  <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputPassword1">Organization</label>
                            <input class="form-control" id="exampleInputPassword1" type="text" placeholder="IT Enterprise Application Development" readonly>
                          </div>
						  <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputPassword1">Email</label>
                            <input class="form-control" id="exampleInputPassword1" type="text" placeholder="dwi.fitriyanto@miegacoan.co.id" readonly>
                          </div>
						  <div class="mb-3">
                            <label class="col-form-label pt-0" for="exampleInputPassword1">No. Telephon</label>
                            <input class="form-control" id="exampleInputPassword1" type="text" placeholder="+628111181841" readonly>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-xl-6">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="card">
                      <div class="card-body">
                        <form class="theme-form mega-form">
                          <div class="mb-3">
                            <label class="col-form-label">Tanggal Pengajuan</label>
                            <input class="form-control digits" type="date" value="<?php echo date('dd/mm/yyyy'); ?>">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label">Jabatan (Berdasarkan MPP)</label>
                            <select class="form-select digits" id="exampleFormControlSelect9">
                              <option>Pilih Jabatan yang dituju</option>
							  <option>Regional Manager</option>
                              <option>Area Manager</option>
                              <option>Store Manager</option>
                              <option>Asst. Store Manager</option>
                              <option>Floor Manager</option>
							  <option>Floor Leader</option>
							  <option>Stocker</option>
							  <option>Trainer</option>	
							  <option>QC</option>
							  <option>Crew Store</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label">Grading</label>
                            <div class="m-t-15 m-checkbox-inline">
							  <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
								<input class="form-check-input" id="inline-1" type="checkbox">
								<label class="form-check-label" for="inline-1">C4</label>
							  </div>
							  <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
								<input class="form-check-input" id="inline-2" type="checkbox">
								<label class="form-check-label" for="inline-2">C3</label>
							  </div>
							  <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
								<input class="form-check-input" id="inline-3" type="checkbox">
								<label class="form-check-label" for="inline-3">C2</label>
							  </div>
							  <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
								<input class="form-check-input" id="inline-4" type="checkbox">
								<label class="form-check-label" for="inline-4">C1</label>
							  </div>
							  <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
								<input class="form-check-input" id="inline-5" type="checkbox">
								<label class="form-check-label" for="inline-5">B3</label>
							  </div>
							  <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
								<input class="form-check-input" id="inline-6" type="checkbox">
								<label class="form-check-label" for="inline-6">B2</label>
							  </div>
							  <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
								<input class="form-check-input" id="inline-7" type="checkbox">
								<label class="form-check-label" for="inline-7">B1</label>
							  </div>
                        	</div>
                          </div>
						  <div class="mb-3">
                            <label class="col-form-label">Jenis Permintaan</label>
                            <div class="m-t-15 m-checkbox-inline">
							  <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
								<input class="form-check-input" id="inline-8" type="checkbox">
								<label class="form-check-label" for="inline-8">Pengganti</label>
							  </div>
							  <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
								<input class="form-check-input" id="inline-9" type="checkbox">
								<label class="form-check-label" for="inline-9">Buffer/Stock</label>
							  </div>
							  <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
								<input class="form-check-input" id="inline-10" type="checkbox">
								<label class="form-check-label" for="inline-10">Penambahan (Posisi Baru)</label>
							  </div>
                        	</div>
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label">Jumlah</label>
                            <input class="form-control" id="inputnumber" type="number" placeholder="Contact">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label">Penempatan</label>
                            <select class="form-select digits" id="exampleFormControlSelect9">
                              <option>Pilih Jabatan yang dituju</option>
							  <option>HO Malang</option>
                              <option>HO Jakarta - Menara BCA</option>
                              <option>Store</option>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label">Nama Store</label>
                            <input class="form-control" type="text" placeholder="">
                          </div>							
                          <div class="mb-3">
                            <label class="col-form-label">Target Pemenuhan</label>
                            <input class="form-control digits" type="date" value="<?php echo date('dd/mm/yyyy'); ?>">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label">PIC Recruitment</label>
                            <input class="form-control" type="text" placeholder="">
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label">Bertanggung Jawab Ke</label>
                            <select class="form-select digits" id="exampleFormControlSelect9">
                              <option>Pilih Jabatan yang dituju</option>
							  <option>Head of Salen & Operations</option>
							  <option>Regional Manager</option>
                              <option>Area Manager</option>
                              <option>Store Manager</option>
                              <option>Asst. Store Manager</option>
                              <option>Floor Manager</option>
							  <option>Floor Leader</option>
                            </select>
                          </div>
						  <div class="mb-3">
                            <label class="col-form-label">Pendidikan</label>
                            <div class="m-t-15 m-checkbox-inline">
							  <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
								<input class="form-check-input" id="inline-11" type="checkbox">
								<label class="form-check-label" for="inline-11">S1</label>
							  </div>
							  <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
								<input class="form-check-input" id="inline-12" type="checkbox">
								<label class="form-check-label" for="inline-12">D3</label>
							  </div>
							  <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
								<input class="form-check-input" id="inline-13" type="checkbox">
								<label class="form-check-label" for="inline-13">SMA/STM</label>
							  </div>
                        	</div>
                          </div>
						  <div class="mb-3">
                            <label class="col-form-label">Jenis Kelamin</label>
                            <div class="m-t-15 m-checkbox-inline">
							  <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
								<input class="form-check-input" id="inline-14" type="checkbox">
								<label class="form-check-label" for="inline-14">Pria</label>
							  </div>
							  <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
								<input class="form-check-input" id="inline-15" type="checkbox">
								<label class="form-check-label" for="inline-15">Wanita</label>
							  </div>
                        	</div>
                          </div>
                          <div class="mb-3">
                            <label class="col-form-label">Usia</label>
                            <input class="form-control" type="text" placeholder="">
                          </div>
						  <div class="mb-3">
                            <label class="col-form-label">Status</label>
                            <div class="m-t-15 m-checkbox-inline">
							  <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
								<input class="form-check-input" id="inline-14" type="checkbox">
								<label class="form-check-label" for="inline-14">Single</label>
							  </div>
							  <div class="form-check form-check-inline checkbox checkbox-dark mb-0">
								<input class="form-check-input" id="inline-15" type="checkbox">
								<label class="form-check-label" for="inline-15">Tidak di Persyaratkan</label>
							  </div>
							  <div class="mb-3">
								<label class="col-form-label">Salary</label>
								<input class="form-control" type="text" placeholder="">
							  </div>
							  <hr class="mt-4 mb-4">
							  <div class="row">
								<div class="col">
								  <div>
									<label class="form-label" for="exampleFormControlTextarea4">Pengalaman Kerja Syarat Lain-lain (Kualifikasi Tambahan)</label>
									<textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
								  </div>
								</div>
							  </div><br>
							  <div class="row">
								<div class="col">
								  <div>
									<label class="form-label" for="exampleFormControlTextarea4">Job Description</label>
									<textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
								  </div>
								</div>
							  </div>								
                        	</div>
                          </div>	
                        </form>
                      </div>
                      <div class="card-footer text-end">
                        <button class="btn btn-primary">Submit</button>
                        <button class="btn btn-secondary">Cancel</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
		  <?php
				include '../layouts/footer.php'
		  ?>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js-->
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="../assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="../assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="../assets/js/sidebar-menu.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
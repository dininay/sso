<?php include '../../layouts/koneksi.php'; ?>

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
    <title>CoreSSO - Singel Sign On</title>
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
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
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

      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
		  <?php
		  include '../layouts/right-sidebar-admin.php'
		?>

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6">
                  <h5>Data Employee Resign</h5>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Data Tables</li>
                    <li class="breadcrumb-item active">Data Employee Resign</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>

          <?php
          // Cek apakah ada hash 'update-success' pada URL
          if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['resign-success']) && $_GET['resign-success'] == '1') {
              // Tampilkan pesan sukses
              echo '<div class="alert alert-success" role="alert">Data berhasil dipindahkan!</div>';
          }
          ?>

          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <!-- HTML (DOM) sourced data  Starts-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                  <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Employee Resign List</h5>
                  </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                    <?php if (!empty($data_resign)): ?>
                      <table class="display" id="data-source-1" style="width:100%">
                        <thead>
                          <tr>
                            <th>NIK</th>
                            <th>Employee Name</th>
                            <!-- <th>Organization Code</th> -->
                            <th>Organization Name</th>
                            <!-- <th>Position ID</th> -->
                            <th>Position Name</th>
                            <!-- <th>Level Code</th>
                            <th>Organization Level</th>
                            <th>Birth Date</th> -->
                            <th>Join Date</th>
                            <th>Employment Type</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data_resign as $row_resign): ?>
                        <tr>
                            <td><?= $row_resign['EmployeeID'] ?></td>
                            <td><?= $row_resign['EmployeeName'] ?></td>
                            
                            <td><?= $row_resign['OrganizationName'] ?></td>
                            
                            <td><?= $row_resign['PositionName'] ?></td>
                            
                            <td><?= $row_resign['JoinDate'] ?></td>
                            <td><?= $row_resign['EmploymentType'] ?></td>
                            <td>
                                <ul class="action">
                                    <li class="detail mx-2"><a href="emp_detail_exit.php?id=<?php echo $row_resign['EmployeeID']; ?>"><i class="icon-book"></i></a></li>
                                    <!-- <li class="edit"><a href="#editModal" data-toggle="modal" data-target="#editModal" data-employee-id="<?php echo $row_resign['EmployeeID']; ?>"><i class="icon-pencil-alt"></i></a></li>
                                    <li class="delete"><a href="#deleteModal" data-bs-toggle="modal" data-target="#deleteModal" data-employee-id="<?php echo $row_resign['EmployeeID']; ?>" onclick="setDeleteEmployeeID(this)"><i class="icon-trash"></i></a></li> -->
                                </ul>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                        </tfoot>
                      </table>
                      <?php else: ?>
                          <p>Tidak ada data tersedia.</p>
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
              </div>
              <!-- HTML (DOM) sourced data  Ends-->
              <!-- Ajax sourced data  Starts-->
              <!-- Ajax sourced data Ends-->
              <!-- Javascript sourced data  Starts-->
              <!-- Javascript sourced data Ends-->
              <!-- Server-side processing Starts-->
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <?php
				include '../layouts/footer.php'
		  ?>

      <!-- Modal Hapus -->
      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="deleteModalLabel">Hapus Employee</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Apakah Anda yakin ingin menghapus employee ini?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-danger" onclick="deleteEmployee()">Hapus</button>
            </div>
          </div>
        </div>
      </div>

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
    <script src="../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- JS Create -->
    <script>
      // Tangani submit formulir create
      $('#createForm').submit(function(e) {
        // Periksa apakah terdapat hash 'update-success' pada URL
        if (window.location.hash === '#create-success') {
            // Tampilkan pesan sukses kepada pengguna, misalnya dengan menggunakan alert atau modal
            alert('Data created successfully!');
            // Hapus hash dari URL agar pesan sukses tidak ditampilkan lagi setelah refresh
            window.location.hash = '';
        }
          e.preventDefault();
          var formData = $(this).serialize();
          $.ajax({
              url: 'emp_create_list.php', // Ganti dengan URL untuk memproses pembuatan karyawan
              method: 'POST',
              data: formData,
              success: function(response) {
                  // Tanggapi hasil dari server, misalnya: berhasil atau gagal
                  console.log(response);
                  // Tutup modal setelah berhasil
                  $('#createModal').modal('hide');
                  // Muat ulang halaman atau tampilkan pesan sukses
                  window.location.href = 'emp_datatable_list.php?create-success=1';
                  console.log(formData);
              },
              error: function(xhr, status, error) {
                  // Tanggapi kesalahan jika terjadi
                  console.error(xhr.responseText);
              }
          });
      });
      $('#createModal .close').click(function() {
          $('#createModal').modal('hide');
        });
    </script>

    <!-- JS Edit -->
    <script>
      $(document).ready(function() {
          // Periksa apakah terdapat hash 'update-success' pada URL
          if (window.location.hash === '#update-success') {
              // Tampilkan pesan sukses kepada pengguna, misalnya dengan menggunakan alert atau modal
              alert('Data updated successfully!');
              // Hapus hash dari URL agar pesan sukses tidak ditampilkan lagi setelah refresh
              window.location.hash = '';
          }
          
          // Tangani klik tombol edit dengan event delegate
          $(document).on('click', '.edit', function(e) {
              e.preventDefault();
              var row = $(this).closest('tr');
              var employeeID = row.find('td:eq(0)').text();
              var employeeName = row.find('td:eq(1)').text();
              var organizationCode = row.find('td:eq(2)').text();
              var organizationName = row.find('td:eq(3)').text();
              var positionID = row.find('td:eq(4)').text();
              var positionName = row.find('td:eq(5)').text();
              var levelID = row.find('td:eq(6)').text();
              var orgLevel = row.find('td:eq(7)').text();
              var birthDate = row.find('td:eq(8)').text();
              var joinDate = row.find('td:eq(9)').text();
              var employmentType = row.find('td:eq(10)').text();
              // Isi formulir edit dengan data yang dipilih
              $('#editEmployeeID').val(employeeID);
              $('#editEmployeeName').val(employeeName);
              $('#editOrganizationCode').val(organizationCode);
              $('#editOrganizationName').val(organizationName);
              $('#editPositionID').val(positionID);
              $('#editPositionName').val(positionName);
              $('#editLevelID').val(levelID);
              $('#editOrgLevel').val(orgLevel);
              $('#editBirthDate').val(birthDate);
              $('#editJoinDate').val(joinDate);
              $('#editEmploymentType').val(employmentType);
              // Tampilkan modal edit
              $('#editModal').modal('show');
          });

          $('#editModal .close').click(function() {
              $('#editModal').modal('hide');
          });

          // Tangani submit formulir edit
          $('#editForm').submit(function(e) {
              e.preventDefault();
              var formData = $(this).serialize();
              $.ajax({
                  url: 'emp_edit_list.php', // Ganti dengan URL untuk memproses edit
                  method: 'POST',
                  data: formData,
                  success: function(response) {
                      // Tanggapi hasil dari server, misalnya: berhasil atau gagal
                      console.log(response);
                      // Tutup modal setelah berhasil
                      $('#editModal').modal('hide');
                      // Refresh halaman atau tampilkan pesan sukses
                      window.location.href = 'emp_datatable_list.php?update-success=1';
                  },
                  error: function(xhr, status, error) {
                      // Tanggapi kesalahan jika terjadi
                      console.error(xhr.responseText);
                  }
              });
          });
      });
    </script>

    <!-- JS Resign -->
    <script>
      $(document).ready(function() {
                    // Periksa apakah terdapat hash 'update-success' pada URL
                    var urlParams = new URLSearchParams(window.location.search);
                if (urlParams.has('resign-success')) {
                    // Remove the 'update-success' parameter from the URL without reloading
                    urlParams.delete('resign-success');
                    var newUrl = window.location.pathname + '?' + urlParams.toString();
                    window.history.replaceState({}, document.title, newUrl);
                }});
    </script>

    <!-- JS Delete -->
    <script>
      $(document).ready(function() {
        // Periksa apakah terdapat hash 'update-success' pada URL
        if (window.location.hash === '#delete-success') {
            // Tampilkan pesan sukses kepada pengguna, misalnya dengan menggunakan alert atau modal
            alert('Data deleted successfully!');
            // Hapus hash dari URL agar pesan sukses tidak ditampilkan lagi setelah refresh
            window.location.hash = '';
        }
      }
      )
      var deleteEmployeeID; // Variabel global untuk menyimpan employeeID yang akan dihapus

      // Fungsi untuk menetapkan employeeID yang akan dihapus saat tautan hapus diklik
      function setDeleteEmployeeID(element) {
        deleteEmployeeID = $(element).data('employee-id'); // Ambil employeeID dari atribut data-employee-id
      }

      // Fungsi untuk menghapus karyawan setelah pengguna mengonfirmasi dalam modal
      function deleteEmployee() {
        if (deleteEmployeeID) {
          // Kirim permintaan AJAX ke server untuk menghapus data karyawan
          $.ajax({
            url: 'emp_delete_list.php', // Ganti dengan URL endpoint untuk menghapus karyawan
            type: 'POST',
            data: { employeeID: deleteEmployeeID }, // Kirim ID karyawan yang akan dihapus
            success: function(response) {
              // Tanggapan dari server
              console.log(response);


              // Tutup modal setelah menghapus
              $('#deleteModal').modal('hide');
              window.location.href = 'emp_datatable_list.php?delete-success=1';
              // Refresh halaman atau lakukan tindakan lain jika diperlukan
            },
            error: function(xhr, status, error) {
              // Tangani kesalahan jika permintaan gagal
              console.error(xhr.responseText);
              alert('An error occurred while deleting employee.');
            }
          });
        } else {
          alert('Invalid employeeID.'); // Kasus jika employeeID tidak valid
        }
      }
    </script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
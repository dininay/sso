<?php
// Lakukan koneksi ke database
include '../../layouts/koneksi.php';
        ?>
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
                <?php include '../layouts/top-sidebar.php'; ?>
                <!-- Page Header Ends -->

                <!-- Page Body Start-->
                <div class="page-body-wrapper">
                    <!-- Page Sidebar Start-->
                    <?php include '../layouts/right-sidebar-admin.php'; ?>
                    <!-- Page Sidebar Ends-->

                    <div class="page-body">
                        <div class="container-fluid">
                            <div class="page-title">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5>Detail Employee Data</h5>
                                    </div>
                                    <div class="col-sm-6">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                            <li class="breadcrumb-item">Data Tables</li>
                                            <li class="breadcrumb-item active">Detail Employee Data</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
          // Cek apakah ada hash 'update-success' pada URL
          if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['update-success']) && $_GET['update-success'] == '1') {
              // Tampilkan pesan sukses
              echo '<div class="alert alert-warning" role="alert">Data berhasil diubah!</div>';
          }
          ?>

                        <!-- Container-fluid starts-->
                        <div class="container-fluid" >
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card" id="employee-details">
                                        <div class="card-header pb-0">
                                            <h5 class="mb-3">Employee Details</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-striped">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Employee ID</th>
                                                            <td><?php echo isset($data_resign['EmployeeID']) ? $data_resign['EmployeeID'] : ""; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Employee Name</th>
                                                            <td><?php echo isset($data_resign['EmployeeName']) ? $data_resign['EmployeeName'] : ""; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Organization Code</th>
                                                            <td><?php echo isset($data_resign['OrganizationCode']) ? $data_resign['OrganizationCode'] : ""; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Organization Name</th>
                                                            <td><?php echo isset($data_resign['OrganizationName']) ? $data_resign['OrganizationName'] : ""; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Position ID</th>
                                                            <td><?php echo isset($data_resign['Posid']) ? $data_resign['Posid'] : ""; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Position Name</th>
                                                            <td><?php echo isset($data_resign['PositionName']) ? $data_resign['PositionName'] : ""; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Level Code</th>
                                                            <td><?php echo isset($data_resign['LevelID']) ? $data_resign['LevelID'] : ""; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Organization Level</th>
                                                            <td><?php echo isset($data_resign['OrgLevel']) ? $data_resign['OrgLevel'] : ""; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Birth Date</th>
                                                            <td><?php echo isset($data_resign['BirthDate']) ? $data_resign['BirthDate'] : ""; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Join Date</th>
                                                            <td><?php echo isset($data_resign['JoinDate']) ? $data_resign['JoinDate'] : ""; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Employment Type</th>
                                                            <td><?php echo isset($data_resign['EmploymentType']) ? $data_resign['EmploymentType'] : ""; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Status Employee</th>
                                                            <td><?php echo isset($data_resign['StatusEmployee']) ? $data_resign['StatusEmployee'] : ""; ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                                <!-- Tombol untuk mencetak PDF -->
                                                <button class="btn btn-primary mb-3" onclick="printEmployeeDetails()">Print PDF</button>
                                                <!-- Tombol untuk kembali ke halaman sebelumnya -->
                                                <button class="btn btn-secondary mb-3" onclick="goBack()">Back</button>
                                                <!-- Tombol Edit -->
                                                <!-- <button class="btn btn-success btn-sm" id="editButton" onclick="showEditModal()">Edit</button> -->
                                                <!-- Tombol Resign -->
                                                <!-- <button class="btn btn-danger btn-sm" id="resignButton" onclick="showResignModal()">Resign</button> -->
                                                <!-- Tombol Hapus -->
                                                <!-- <button class="btn btn-danger btn-sm" onclick="showDeleteModal()">Hapus</button> -->
    
                                </div>
                            </div>
                        </div>
                        <!-- Container-fluid Ends-->
                    </div>
                    <!-- footer start-->
                    <?php include '../layouts/footer.php'; ?>
                    
                    <!-- Modal Edit -->
                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editModalLabel">Edit Employee Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Formulir edit data -->
                                    <form id="editForm">
                                        <!-- Isi formulir edit sesuai kebutuhan -->
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" id="editEmployeeID" name="EmployeeID">
                                        </div>
                                        <div class="form-group">
                                            <label for="editEmployeeName">Employee Name</label>
                                            <input type="text" class="form-control" id="editEmployeeName" name="EmployeeName">
                                        </div>
                                        <div class="form-group">
                                        <label for="editOrganizationCode">Organization Code</label>
                                        <input type="text" class="form-control" id="editOrganizationCode" name="OrganizationCode">
                                        </div>
                                        <div class="form-group">
                                        <label for="editOrganizationName">Organization Name</label>
                                        <input type="text" class="form-control" id="editOrganizationName" name="OrganizationName">
                                        </div>
                                        <div class="form-group">
                                        <label for="editPositionID">Position ID</label>
                                        <input type="text" class="form-control" id="editPositionID" name="Posid">
                                        </div>
                                        <div class="form-group">
                                        <label for="editPositionName">Position Name</label>
                                        <input type="text" class="form-control" id="editPositionName" name="PositionName">
                                        </div>
                                        <div class="form-group">
                                        <label for="editLevelID">Level Code</label>
                                        <input type="text" class="form-control" id="editLevelID" name="LevelID">
                                        </div>
                                        <div class="form-group">
                                        <label for="editOrgLevel">Organization Level</label>
                                        <input type="text" class="form-control" id="editOrgLevel" name="OrgLevel">
                                        </div>
                                        <div class="form-group">
                                        <label for="editBirthDate">Birth Date</label>
                                        <input type="text" class="form-control" id="editBirthDate" name="BirthDate">
                                        </div>
                                        <div class="form-group">
                                        <label for="editJoinDate">Join Date</label>
                                        <input type="text" class="form-control" id="editJoinDate" name="JoinDate">
                                        </div>
                                        <div class="form-group">
                                        <label for="editEmploymentType">Employment Type</label>
                                        <input type="text" class="form-control" id="editEmploymentType" name="EmploymentType">
                                        </div>
                                        <!-- Tambahkan elemen formulir lainnya sesuai kebutuhan -->
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Resign -->
                    <div class="modal fade" id="resignModal" tabindex="-1" role="dialog" aria-labelledby="resignModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="resignModalLabel">Resign Confirmation</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to resign?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-danger" id="confirmResignButton">Resign</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Hapus -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Hapus Employee</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menghapus employee ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="closeModal()">Batal</button>
                                    <button type="button" class="btn btn-danger" id="deleteButton" onclick="deleteEmployee(<?php echo $data['EmployeeID']; ?>)">Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
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
            <script>
            function printEmployeeDetails() {
                // Simpan referensi ke bagian detail karyawan
                var employeeDetails = document.getElementById('employee-details');

                // Salin konten dari bagian detail karyawan ke dalam elemen baru
                var printContents = employeeDetails.outerHTML;

                // Buat elemen baru untuk dicetak
                var printWindow = window.open('', '_blank');
                printWindow.document.open();
                printWindow.document.write('<html><head><title>Employee Details</title>');

                // Tambahkan link relatif CSS untuk gaya cetak
                printWindow.document.write('<link rel="stylesheet" type="text/css" href="../assets/css/style.css">');
                // Tambahkan CSS khusus untuk cetak
                printWindow.document.write('<style>@media print { body { background-color: #fff; } }</style>');

                printWindow.document.write('</head><body>');
                printWindow.document.write(printContents);
                printWindow.document.write('</body></html>');

                // Cetak elemen baru
                printWindow.document.close();
                printWindow.print();
            }
            </script>
            <script>
                function goBack() {
                    window.location.href = 'emp_datatable_exit.php';
                }
            </script>

            <script>
                $(document).ready(function() {
                    // Periksa apakah terdapat hash 'update-success' pada URL
                    var urlParams = new URLSearchParams(window.location.search);
                if (urlParams.has('update-success')) {
                    // Remove the 'update-success' parameter from the URL without reloading
                    urlParams.delete('update-success');
                    var newUrl = window.location.pathname + '?' + urlParams.toString();
                    window.history.replaceState({}, document.title, newUrl);
                }
                    });
                // Fungsi untuk menampilkan modal edit
                function showEditModal() {
                    // Isi formulir edit dengan data yang sesuai
                    $('#editEmployeeID').val('<?php echo isset($data['EmployeeID']) ? $data['EmployeeID'] : ""; ?>');
                    $('#editEmployeeName').val('<?php echo isset($data['EmployeeName']) ? $data['EmployeeName'] : ""; ?>');
                    $('#editOrganizationCode').val('<?php echo isset($data['OrganizationCode']) ? $data['OrganizationCode'] : ""; ?>');
                    $('#editOrganizationName').val('<?php echo isset($data['OrganizationName']) ? $data['OrganizationName'] : ""; ?>');
                    $('#editPositionID').val('<?php echo isset($data['Posid']) ? $data['Posid'] : ""; ?>');
                    $('#editPositionName').val('<?php echo isset($data['PositionName']) ? $data['PositionName'] : ""; ?>');
                    $('#editLevelID').val('<?php echo isset($data['LevelID']) ? $data['LevelID'] : ""; ?>');
                    $('#editOrgLevel').val('<?php echo isset($data['OrgLevel']) ? $data['OrgLevel'] : ""; ?>');
                    $('#editBirthDate').val('<?php echo isset($data['BirthDate']) ? $data['BirthDate'] : ""; ?>');
                    $('#editJoinDate').val('<?php echo isset($data['JoinDate']) ? $data['JoinDate'] : ""; ?>');
                    $('#editEmploymentType').val('<?php echo isset($data['EmploymentType']) ? $data['EmploymentType'] : ""; ?>');
                    // Tampilkan modal edit
                    $('#editModal').modal('show');

                    $('#editModal .close').click(function() {
                            $('#editModal').modal('hide');
                        });
                }

                // Event handler untuk saat tombol edit diklik
                $('#editButton').click(function() {
                    showEditModal();
                });

                $('#editForm').submit(function(e) {
                        e.preventDefault();
                        var formData = $(this).serialize();
                            // Ambil nilai EmployeeID dari form
                            var employeeID = $('#editEmployeeID').val();
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
                                window.location.href = 'emp_detail_list.php?id=' + employeeID + '&update-success=1';
                            },
                            error: function(xhr, status, error) {
                                // Tanggapi kesalahan jika terjadi
                                console.error(xhr.responseText);
                            }
                        });
                    });

            </script>

            <script>
                // Event handler untuk saat tombol resign diklik
                $('#resignButton').click(function() {
                    // Tampilkan modal resign
                    $('#resignModal').modal('show');
                });

                // Event handler untuk saat tombol "Resign" di modal diklik
                $('#confirmResignButton').click(function() {
                    // Ambil ID karyawan dari URL
                    var urlParams = new URLSearchParams(window.location.search);
                    var employeeID = urlParams.get('id');

                    // Kirim permintaan AJAX untuk melakukan resign
                    $.ajax({
                        url: 'emp_resign_list.php',
                        method: 'POST',
                        data: { EmployeeID: employeeID },
                        success: function(response) {
                            // Tanggapi hasil dari server
                            console.log(response);
                            // Redirect ke halaman emp_datatable_exit.php setelah berhasil resign
                            window.location.href = 'emp_datatable_exit.php';
                        },
                        error: function(xhr, status, error) {
                            // Tangani kesalahan jika terjadi
                            console.error(xhr.responseText);
                            alert('An error occurred while resigning.');
                        }
                    });
                });
            </script>

            <script>
                
                // Event handler untuk saat tombol hapus diklik
                $('#deleteButton').click(function() {
                var employeeID = <?php echo isset($data['EmployeeID']) ? $data['EmployeeID'] : "''"; ?>;
                if (employeeID !== '') {
                    showDeleteModal();
                } else {
                    alert('Employee ID is not available.');
                }
                });

                function closeModal() {
                    $('#deleteModal').modal('hide');
                }
                
                // Fungsi untuk menampilkan modal hapus
                function showDeleteModal() {
                    // Tampilkan modal hapus
                    $('#deleteModal').modal('show');
                    
                    $('#deleteModal .close').click(function() {
                            $('#deleteModal').modal('hide');
                        });
                }

                // Fungsi untuk menghapus karyawan setelah pengguna mengonfirmasi dalam modal
                function deleteEmployee() {
                var employeeID = <?php echo isset($data['EmployeeID']) ? $data['EmployeeID'] : "''"; ?>;
                console.log(employeeID);
                if (employeeID !== '') {
                    // Lakukan penghapusan data dengan menggunakan AJAX
                    $.ajax({
                        url: 'emp_delete_list.php',
                        method: 'POST',
                        data: { EmployeeID: employeeID },
                        success: function(response) {
                            // Tanggapi hasil dari server
                            console.log(response);
                            // Tutup modal setelah berhasil
                            $('#deleteModal').modal('hide');
                            console.log(employeeID);
                            // window.location.href = 'emp_datatable_list.php?delete-success=1';
                        },
                        error: function(xhr, status, error) {
                            // Tangani kesalahan jika permintaan gagal
                            console.error(xhr.responseText);
                            alert('An error occurred while deleting employee.');
                        }
                    });
                } else {
                    alert('Employee ID is not available.');
                }
                }
            </script>
        </body>
        </html>

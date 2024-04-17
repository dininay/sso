<?php
// Lakukan koneksi ke database
include '../../layouts/koneksi.php';
$koneksi = mysqli_connect("localhost","root","","employees");
 
// Check connection
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

// Periksa apakah ada data yang dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data yang dikirim dari formulir tambah
    $employeeName = $_POST['EmployeeName'];
    $organizationCode = $_POST['OrganizationCode'];
    $organizationName = $_POST['OrganizationName'];
    $positionID = $_POST['Posid'];
    $positionName = $_POST['PositionName'];
    $levelID = $_POST['LevelID'];
    $orgLevel = $_POST['OrgLevel'];
    $birthDate = $_POST['BirthDate'];
    $joinDate = $_POST['JoinDate'];
    $employmentType = $_POST['EmploymentType'];

    // Buat query untuk menambahkan data karyawan ke dalam database
    $employeeID = rand(10000000, 99999999);
    $query = "INSERT INTO act_emp (EmployeeID, EmployeeName, OrganizationCode, OrganizationName, Posid, PositionName, LevelID, OrgLevel, BirthDate, JoinDate, EmploymentType, StatusEmployee) 
              VALUES ('$employeeID', '$employeeName', '$organizationCode', '$organizationName', '$positionID', '$positionName', '$levelID', '$orgLevel', '$birthDate', '$joinDate', '$employmentType','Aktif')";
    var_dump($query);

    // Eksekusi query
    if (mysqli_query($koneksi, $query)) {
        // Jika penambahan data berhasil
        echo json_encode(['status' => 'success', 'message' => 'Employee added successfully.']);
    } else {
        // Jika terjadi kesalahan
        echo json_encode(['status' => 'error', 'message' => 'Failed to add employee: ' . mysqli_error($koneksi)]);
    }
} else {
    // Jika tidak ada data yang dikirim melalui metode POST
    echo json_encode(['status' => 'error', 'message' => 'No data received.']);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
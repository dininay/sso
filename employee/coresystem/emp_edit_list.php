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
    // Ambil data yang dikirim dari formulir edit
    $employeeID = $_POST['EmployeeID'];
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

    // Lakukan pembaruan data di database menggunakan MySQLi
    $query = "UPDATE act_emp SET EmployeeName = '$employeeName', OrganizationCode = '$organizationCode', OrganizationName = '$organizationName', Posid = '$positionID', PositionName = '$positionName', LevelID = '$levelID', OrgLevel = '$orgLevel', BirthDate = '$birthDate', JoinDate = '$joinDate', EmploymentType = '$employmentType' WHERE EmployeeID = '$employeeID'";
    
    // Eksekusi query
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah query berhasil dieksekusi
    if ($result) {
        // Jika pembaruan berhasil
        echo json_encode(['status' => 'success', 'message' => 'Data updated successfully.']);
    } else {
        // Jika terjadi kesalahan
        echo json_encode(['status' => 'error', 'message' => 'Failed to update data.']);
    }

    // Tutup koneksi
    mysqli_close($koneksi);
} else {
    // Jika tidak ada data yang dikirim melalui metode POST
    echo json_encode(['status' => 'error', 'message' => 'No data received.']);
}
?>

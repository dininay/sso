<?php
// Lakukan koneksi ke database
include '../../layouts/koneksi.php';
$koneksi = mysqli_connect("localhost","root","","employees");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
// Periksa apakah ada data yang dikirim melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['EmployeeID'])) {
    // Ambil ID karyawan yang akan dihapus dari data POST
    $employeeID = $_POST['EmployeeID'];

    // Buat query untuk menghapus karyawan berdasarkan ID
    $query = "DELETE FROM act_emp WHERE EmployeeID = ?";

    // Siapkan statement
    $stmt = $koneksi->prepare($query);

    // Bind parameter ke statement
    $stmt->bind_param("i", $employeeID);

    // Eksekusi statement
    if ($stmt->execute()) {
        // Jika penghapusan berhasil
        echo json_encode(['status' => 'success', 'message' => 'Employee deleted successfully.']);
    } else {
        // Jika terjadi kesalahan
        echo json_encode(['status' => 'error', 'message' => 'Failed to delete employee.']);
    }

    // Tutup statement
    $stmt->close();
} else {
    // Jika tidak ada data yang dikirim melalui metode POST
    echo json_encode(['status' => 'error', 'message' => 'No employee ID received.']);
}
?>

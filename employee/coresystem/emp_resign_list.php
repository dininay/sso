<?php
include '../../layouts/koneksi.php';
$koneksi = mysqli_connect("localhost","root","","employees");
 
// Check connection
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

// Pastikan EmployeeID tersedia dalam permintaan
if(isset($_POST['EmployeeID'])) {
    $employeeID = $_POST['EmployeeID'];

    $resignDate = date("Y-m-d");

    // Mulai transaksi
    mysqli_begin_transaction($koneksi);

    // Proses UPDATE untuk menandai karyawan sebagai resigned dalam tabel act_emp
    $update_query = "UPDATE act_emp SET StatusEmployee = 'Resign' WHERE EmployeeID = '$employeeID'";
    $update_result = mysqli_query($koneksi, $update_query);

    if($update_result) {
        // Jika UPDATE berhasil, lakukan INSERT untuk memindahkan data ke tabel res_emp
        $insert_query = "INSERT INTO exit_emp (EmployeeID, EmployeeName, OrganizationCode, OrganizationName, Posid, PositionName, LevelID, OrgLevel, BirthDate, JoinDate, EmploymentType, StatusEmployee, ResignDate) SELECT EmployeeID, EmployeeName, OrganizationCode, OrganizationName, Posid, PositionName, LevelID, OrgLevel, BirthDate, JoinDate, EmploymentType, 'Resign', '$resignDate' FROM act_emp WHERE EmployeeID = '$employeeID'";
        $insert_result = mysqli_query($koneksi, $insert_query);

        if($insert_result) {
            // Jika INSERT berhasil, hapus data dari tabel act_emp
            $delete_query = "DELETE FROM act_emp WHERE EmployeeID = '$employeeID'";
            $delete_result = mysqli_query($koneksi, $delete_query);

            if($delete_result) {
                // Jika penghapusan berhasil, commit transaksi
                mysqli_commit($koneksi);
                echo json_encode(array("status" => "success", "message" => "Data karyawan berhasil dipindahkan ke halaman resign."));
            } else {
                // Jika penghapusan gagal, rollback transaksi
                mysqli_rollback($koneksi);
                echo json_encode(array("status" => "error", "message" => "Gagal menghapus data dari tabel act_emp."));
            }
        } else {
            // Jika INSERT gagal, rollback transaksi
            mysqli_rollback($koneksi);
            echo json_encode(array("status" => "error", "message" => "Gagal memindahkan data ke halaman resign."));
        }
    } else {
        // Jika UPDATE gagal, rollback transaksi
        mysqli_rollback($koneksi);
        echo json_encode(array("status" => "error", "message" => "Gagal menandai karyawan sebagai resigned dalam tabel act_emp."));
    }
} else {
    echo json_encode(array("status" => "error", "message" => "EmployeeID tidak tersedia dalam permintaan."));
}

// Tutup koneksi
mysqli_close($koneksi);
?>

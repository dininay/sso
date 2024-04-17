<?php 
$koneksi = mysqli_connect("localhost","root","","employees");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
$sql = "select * from act_emp";
$result = mysqli_query($koneksi, $sql);

if (!$result) {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    exit();
}

// Simpan hasil kueri dalam array
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

//detail data
// Periksa apakah ada parameter ID yang dikirimkan
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mengambil detail data berdasarkan ID
    $sql = "SELECT * FROM act_emp WHERE EmployeeID = '$id'";
    $result = mysqli_query($koneksi, $sql);

    // Periksa apakah query berhasil dieksekusi
    if (!$result) {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
        exit();
    }

    // Periksa apakah data ditemukan
    if (mysqli_num_rows($result) > 0) {
        // Ambil data sebagai array asosiatif
        $data = mysqli_fetch_assoc($result);
    }
}

$sql_resign = "select * from exit_emp";
$result_resign = mysqli_query($koneksi, $sql_resign);

if (!$result_resign) {
    echo "Error: " . $sql_resign . "<br>" . mysqli_error($koneksi);
    exit();
}

// Simpan hasil kueri dalam array
$data_resign = array();
while ($row_resign = mysqli_fetch_assoc($result_resign)) {
    $data_resign[] = $row_resign;
}

//detail data
// Periksa apakah ada parameter ID yang dikirimkan
if (isset($_GET['id'])) {
    $id_resign = $_GET['id'];

    // Query untuk mengambil detail data berdasarkan ID
    $sql_resign = "SELECT * FROM exit_emp WHERE EmployeeID = '$id_resign'";
    $result_resign = mysqli_query($koneksi, $sql_resign);

    // Periksa apakah query berhasil dieksekusi
    if (!$result_resign) {
        echo "Error: " . $sql_resign . "<br>" . mysqli_error($koneksi);
        exit();
    }

    // Periksa apakah data ditemukan
    if (mysqli_num_rows($result_resign) > 0) {
        // Ambil data sebagai array asosiatif
        $data_resign = mysqli_fetch_assoc($result_resign);
    }
}

// Tutup koneksi database
mysqli_close($koneksi);
?>
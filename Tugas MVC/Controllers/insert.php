<?php
$conn = new mysqli('localhost', 'root', '', 'mahasiswa_db');
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $conn->query("INSERT INTO mahasiswa (nama, jurusan, alamat) VALUES ('$nama', '$jurusan', '$alamat')");
    header('Location: index.php');
}
?>


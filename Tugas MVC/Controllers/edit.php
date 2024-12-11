<?php
$conn = new mysqli('localhost', 'root', '', 'mahasiswa_db');
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM mahasiswa WHERE id = $id");
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <input type="text" name="nama" value="<?= $data['nama']; ?>" required>
        <input type="text" name="jurusan" value="<?= $data['jurusan']; ?>" required>
        <textarea name="alamat" required><?= $data['alamat']; ?></textarea>
        <button type="submit">Update</button>
    </form>
</body>
</html>


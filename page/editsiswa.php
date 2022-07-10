<?php
require_once('function/helper.php');
require_once('function/koneksi.php');

if($_SESSION["id"] == null) {
    header("location: " . BASE_URL);
    exit();
}

$error = isset($_GET['emptyform']) ? ($_GET['emptyform']) : false;
$id = isset($_GET['id']) ? ($_GET['id']) : false;

$mahasiswa = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id=$id"));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL . 'aset/css/editsiswa.css' ?>">
</head>
<body>
    <div>
        <div>
            <?php if ($error == "true") : ?>
                <div class="error">
                    Pastikan semua formulir terisi
                </div>
            <?php endif; ?>
    
            <form method="POST" action="<?= BASE_URL . 'process/mahasiswa/process_edit.php' ?>" class="register-form">
            <input name="id" value="<?= $mahasiswa['id'] ?>" type="hidden">
            <div>
                <label>Nama Mahasiswa/i</label>
                <input type="text" name="nama" id="nama" value="<?= $mahasiswa['nama'] ?>">
            </div>
            <div>
                <label>NIM</label>
                <input type="number" name="nim" id="nim" value="<?= $mahasiswa['nim'] ?>">
            </div>
            <div>
                <label>Jenis Kelamin</label>
                <input type="text" name="jeniskelamin" id="jeniskelamin" value="<?= $mahasiswa['jeniskelamin'] ?>">
            </div>
            <div>
                <label>Alamat</label>
                <input type="text" name="alamat" id="alamat" value="<?= $mahasiswa['alamat'] ?>">
            </div>
            <div>
                <label>No. Telp</label>
                <input type="text" name="notelp" id="notelp" value="<?= $mahasiswa['notelp'] ?>">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" id="email" value="<?= $mahasiswa['email'] ?>">
            </div>
    
            <button type="submit">Submit</button>
        </form>
    
        </div>
    </div>
</body>
</html>

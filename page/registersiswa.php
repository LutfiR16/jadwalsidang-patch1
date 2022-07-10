<?php

$process = isset($_GET['process']) ? ($_GET['process']) : false; 

?>

<?php if($process == 'failed') : ?>
    <div class="error">
        Semua formulir harus diisi
    </div>
<?php endif?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?= BASE_URL . 'aset/css/registersiswa.css' ?>">
</head>
<body>
    <form method="POST" action="<?= BASE_URL . 'process/mahasiswa/process_add.php' ?>" class="register-form">
        <div>
            <label>Nama Mahasiswa/i</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div>
            <label>NIM</label>
            <input type="number" name="nim" id="nim">
        </div>
        <div>
            <label>Jenis Kelamin</label>
            <input type="text" name="jeniskelamin" id="jeniskelamin">
        </div>
        <div>
            <label>Alamat</label>
            <input type="text" name="alamat" id="alamat">
        </div>
        <div>
            <label>No. Telp</label>
            <input type="text" name="notelp" id="notelp">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" id="email">
        </div>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
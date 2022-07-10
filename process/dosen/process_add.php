<?php

require_once('../../function/helper.php');
require_once('../../function/koneksi.php');

$nama = $_POST['nama'];
$nidn = $_POST['nidn'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$email = $_POST['email'];

// pengecekan kelengkapan data

if(empty($nama) || empty($nidn) || empty($jeniskelamin) || empty($alamat) || empty($notelp) || empty($email)) {
    header("location: " . BASE_URL . 'dashboard.php?page=registerdosen&process=failed');
} else {
    mysqli_query($koneksi, "INSERT INTO dosen(nama, nidn, jeniskelamin, alamat, notelp, email) VALUES ('$nama', '$nidn', '$jeniskelamin', '$alamat', '$notelp', '$email')");
    header("location: " . BASE_URL . 'dashboard.php?page=datadosen&process=success');
}

?>
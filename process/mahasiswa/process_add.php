<?php

require_once('../../function/helper.php');
require_once('../../function/koneksi.php');

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$email = $_POST['email'];

// pengecekan kelengkapan data

if(empty($nama) || empty($nim) || empty($jeniskelamin) || empty($alamat) || empty($notelp) || empty($email)) {
    header("location: " . BASE_URL . 'dashboard.php?page=registersiswa&process=failed');
} else {
    mysqli_query($koneksi, "INSERT INTO mahasiswa(nama, nim, jeniskelamin, alamat, notelp, email) VALUES ('$nama', '$nim', '$jeniskelamin', '$alamat', '$notelp', '$email')");
    header("location: " . BASE_URL . 'dashboard.php?page=datasiswa&process=success');
}

?>
<?php
require_once('../../function/helper.php');
require_once('../../function/koneksi.php');

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$email = $_POST['email'];
$id = $_POST['id'];

if(empty($nama) || empty($nim) || empty($jeniskelamin) || empty($alamat) || empty($notelp) || empty($email)) {

    header("location: " . BASE_URL . 'dashboard.php?page=editsiswa&id=' . $id . '&emptyform=true');

} else {

    mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', notelp='$notelp', jeniskelamin='$jeniskelamin', alamat='$alamat', notelp='$notelp', email='$email' WHERE id='$id'");

    header("location: " . BASE_URL . 'dashboard.php?page=datasiswa&status=success');
    
}

?>
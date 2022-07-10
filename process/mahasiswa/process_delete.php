<?php
require_once('../../function/helper.php');
require_once('../../function/koneksi.php');

    if($_GET['act']=='delete'){
        $id = $_GET['id'];
        
        mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id='$id'");
        
        header("location: " . BASE_URL . 'dashboard.php?page=datasiswa');
    } else {
        echo "gagal";
    }

?>


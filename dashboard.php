<?php
require_once('function/helper.php');
require_once('function/koneksi.php');

session_start();

$page = isset($_GET['page']) ? ($_GET['page']) : false;

if ($_SESSION['id'] == null) {
    header("location: " . BASE_URL);
    exit();
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL . 'aset/css/navbar.css' ?>">
</head>

<body class="dashboard">
    <div class="navbar">
        <ul>
            <li><a href="<?= BASE_URL . 'dashboard.php' ?>">Dashboard</a></li>
            <li><a href="<?= BASE_URL . 'dashboard.php?page=datasiswa' ?>">List Mahasiswa</a></li>
            <li><a href="<?= BASE_URL . 'dashboard.php?page=datadosen' ?>">List Dosen Penguji</a></li>     
            <li><a href="">Jadwal Sidang</a></li>     

            <?php if($_SESSION !== null) : ?>
                <li class="user-nav">
                    <a href="">Agnes Maria</a>
                    <a href="">Logout</a>
                </li>
            <?php endif?>
            
        </ul>
    </div>

    <div class="content">
        <div>
            <div>
                <?php
                    $filename = "page/$page.php";
                    if(file_exists($filename)){
                        include_once($filename);
                    } else {
                        echo "DASHBOARD";
                    }
                ?>
            </div>
        </div>
    </div>
</body>


</html>
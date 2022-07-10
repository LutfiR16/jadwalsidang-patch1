<?php
require_once('function/helper.php');
require_once('function/koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JadwalSidang</title>
    <link rel="stylesheet" href="<?= BASE_URL . 'aset/css/style.css' ?>">
</head>

<body class="loginpage">
    <div class="content">
        <div class="card-login">
            <div class="card-main">
                <div class="card-header">Form Login</div>
                <div class="card-body">
                    <form class="form-login" method="POST" action="<?= BASE_URL . 'process/process_login.php'?>">
                        <label class="form-label">Username</label>
                        <input type="username" name="username" placeholder="username" class="form-input">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" placeholder="password" class="form-input">
                        <button type="submit" class="btn btn-login">Login</button>
                    </form>
                    <p style="text-align: center;">Belum punya akun?<span><a href="" class=""> Daftar disini</a></span></p>
                </div>
            </div>
        </div>
    </div>

    
</body>

</html>
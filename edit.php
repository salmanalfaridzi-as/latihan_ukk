<?php 
    session_start();
    include("configs/databases/connect.php");
    if(!isset($_SESSION["login"]) && $_SESSION["login"] != true) {
        header("Location: login.php");
    }
    $nis = mysqli_real_escape_string($conn, $_GET["nis"]);
    if(!isset($nis)) {
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">

    <title>EDIT DATA | Sistem Informasi Sekolah</title>
</head>

<body>
    <div class="header">
        <img src="assets/images/banner/banner4.jpg" width="100%" height="150px" alt="" srcset="">
    </div>
    <div class="content">
        <div class="kiri">
            <h2 align="center">Selamat Datang, <?= $_SESSION["display_name"] ?></h2>
            <hr/>
            <a href="insert.php">
                <h3>Tambah Data Siswa</h3>
            </a>
            <a href="dashboard.php">
                <h3>Lihat Data Siswa</h3>
            </a>
            <a href="actions/logout.php">
                <h3>Logout</h3>
            </a>
        </div>
        <div class="kanan" > 
            <h1 ><center>Sistem Informasi Sekolah SMKN 1 BABELAN</center></h1> 
            <?php include("contents/edit.php")?>
        </div>
    </div>
    <div class="footer">
        <img src="assets/images/banner/banner3.jpg" width="100%" height="150px" alt="" srcset="">
    </div>
</body>

</html>
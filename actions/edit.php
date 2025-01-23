<?php
if(isset($_POST["update"])) {
    include "../configs/databases/connect.php";
    $nis = htmlspecialchars(trim($_POST["nis"]));
    $nama = htmlspecialchars(trim($_POST["nama"]));
    $alamat = htmlspecialchars(trim($_POST["alamat"]));
    $ttlahir = htmlspecialchars(trim($_POST["ttlahir"]));
    $jenis_kelamin = htmlspecialchars(trim($_POST["jenis_kelamin"]));
    $no_hp = htmlspecialchars(trim($_POST["no_hp"]));
    $jurusan = htmlspecialchars(trim($_POST["jurusan"]));
    
    $sql = "UPDATE siswa SET 
            nama = '$nama', 
            alamat = '$alamat', 
            tempat_tanggal_lahir = '$ttlahir', 
            jenis_kelamin = '$jenis_kelamin',
            no_hp = '$no_hp',
            jurusan = '$jurusan'    
            WHERE nis = $nis
            ";
    $query = mysqli_query($conn, $sql);
    header("Location: ../dashboard.php");
    echo "<script>
        alert('data berhasil diedit')
    </script>";
} 
<?php
if(isset($_POST["insert"])) {
    include "../configs/databases/connect.php";
    $nama = htmlspecialchars(trim($_POST["nama"]));
    $alamat = htmlspecialchars(trim($_POST["alamat"]));
    $ttlahir = htmlspecialchars(trim($_POST["ttlahir"]));
    $jenis_kelamin = htmlspecialchars(trim($_POST["jenis_kelamin"]));
    $no_hp = htmlspecialchars(trim($_POST["no_hp"]));
    $jurusan = htmlspecialchars(trim($_POST["jurusan"]));
    
    $sql = "INSERT INTO siswa VALUES(0, '$nama', '$alamat', '$ttlahir', '$jenis_kelamin', '$no_hp', '$jurusan')";
    $query = mysqli_query($conn, $sql);
    header("Location: ../dashboard.php");
    echo "<script>
        alert('data berhasil ditambahkan')
    </script>";
} 
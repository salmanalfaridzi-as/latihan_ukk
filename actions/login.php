<?php
session_start();
include "../configs/databases/connect.php";
$username = $_POST["username"];
$password = $_POST["password"];
$sql = "SELECT * FROM user where username ='$username' and password = '$password'";
$query = mysqli_query($conn, $sql);
if (mysqli_num_rows($query) != 0) {
    echo "<br>Login sukses";
    $data = mysqli_fetch_array($query);
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['display_name'] = $data['display_name'];
    $_SESSION['login'] = true;
    header("location:../");
} else {
    echo "<br>Login gagal ";
    echo "<a href=../login.php>Kembali</a>";
}



<?php
session_start();
include_once("../configs/databases/connect.php");
if(!isset($_SESSION["login"]) && $_SESSION["login"] != true) {
    header("Location: login.php");
}
$nis = mysqli_real_escape_string($conn, htmlspecialchars(trim($_GET["nis"])));
$result = mysqli_query($conn, "DELETE FROM
siswa WHERE nis=$nis");
header("Location: ../dashboard.php");
?>
<?php 
    session_start();
    if(isset($_SESSION["login"]) && $_SESSION["login"] == true) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">

    <title>Login | Sistem Informasi Sekolah</title>
</head>

<body>
    <div class="header"> 
        +<img src="assets/images/banner/banner4.jpg" width="100%" height="150px">
    </div>
    <div class="content">
        <div class="kiri">
            <form method="post" action="actions/login.php">
                <table>
                    <tr>
                        <td>Username</td>
                        <td>
                            <input type="text" name="username">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>
                            <input type="password" name="password">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="login">
                        </td>
                    </trc>
                </table>
            </form>
        </div>
        <div class="kanan"> FORM LOGIN </div>
    </div>
    <div class="footer">
        <img src="assets/images/banner/banner3.jpg" width="100%" height="150px" alt="" srcset="">
    </div>
</body>

</html>
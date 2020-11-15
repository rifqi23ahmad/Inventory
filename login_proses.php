<?php
session_start();
include "config/config.php";
$login = mysqli_query($koneksi,"select * from tb_admin where username = '" . $_POST['username'] . "' and password = '" . $_POST['password'] . "'");
$rowcount = mysqli_num_rows($login);
if ($rowcount == 1) {
    $_SESSION['username'] = $_POST['username'];
    header("location:index.php");
} else {
    header("location:login.php");
}
?>
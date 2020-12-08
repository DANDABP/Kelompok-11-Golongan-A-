<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$querry = mysqli_query($koneksi, "select * from admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($querry);
if ($cek > 0) {
    $_SESSION['username'] = true;
    $_POST['status'] = 'login';
    $_SESSION['login_time_stamp'] = time();
    header("location:admin.php");
} else {
    header("location:login.php?pesan=gagal");
}

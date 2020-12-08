<?php
session_start();
include "connection.php";
$email = $_POST['email'];
$password = $_POST['password'];
// $email_saya = "fadhil@gmail.com";
// $password_saya = '123';
// var_dump($email);die();
$data = mysqli_query($koneksi, "select * from login where email='$email' and password='$password'");
$cek = mysqli_num_rows($data);
if ($cek > 0) {
    $_SESSION['email'] = $email;
    $_POST['status'] = "login";
    $_SESSION['login_time_stamp'] = time();
    header("location:index.php?pesan=berhasil");
} else {
    header("location:login.php?pesan=gagal");
}

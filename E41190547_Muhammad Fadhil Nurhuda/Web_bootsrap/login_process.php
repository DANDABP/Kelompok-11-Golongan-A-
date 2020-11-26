<?php 
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$email_saya = "fadhil@gmail.com";
$password_saya = '123';
// var_dump($email);die();
if((strcasecmp($email_saya, $email)== 0)&&($password_saya==$password)){   
    $_SESSION['email'] = $_POST['email'];
    $_SESSION ['login_time_stamp'] = time();
    header("location:index.php?pesan=berhasil");}
    else{
        header("location:login.php?pesan=gagal");
    }
    
?>

<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $email_saya = "s@a.com";
    $password_saya = 123;
    if((strcasecmp($email_saya, $email) == 0) && ($password_saya == $password)){
        session_start();
        $_SESSION['email'] = $email;
        header("Location:index.php?pesan=berhasil");
    }else{
        header("Location:login.php?pesan=gagal");
    }
?>
<?php
    include "koneksi.php";
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($koneksi, "select * from user where email = '$email'");
    $data = mysqli_fetch_array($query);
    if($data['email'] == $email && $data['password'] == $password){
        $_SESSION['email'] = $email;
        header("Location:index.php?pesan=berhasil");
    }else{
        header("Location:login.php?pesan=gagal");
    }
?>
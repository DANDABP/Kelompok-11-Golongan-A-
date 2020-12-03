<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$querrySql = mysqli_query($koneksi,"SELECT * FROM login WHERE username='$username'");
$data = mysqli_fetch_array($querrySql);
//var_dump($username);die();
 if($username == $data['username']) {
  if($password == $data['password']){
    $_SESSION['username'] = $username;
      header("location:index.php?pesan=berhasil");
    }else
  {header("location:login.php?pesan=passwordsalah");
  }
}else{
  header("location:login.php?pesan=emailsalah");
}
?>
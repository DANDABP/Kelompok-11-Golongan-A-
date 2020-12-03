<?php
$koneksi = mysqli_connect("127.0.0.1", "root", "", "login_bootstrap");

if(mysqli_connect_error()){
echo "koneksi database gagal : ".mysqli_connect_error();
}
?>
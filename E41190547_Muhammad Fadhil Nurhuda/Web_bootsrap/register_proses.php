<?php
include "connection.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$remember_password = ['rememberpassword'];


if ($password == $remember_password) {
    $insert = mysqli_query($koneksi, "insert into login values ('','$nama','$email','$password')");
    header("location:index.php?pesan=berhasil");
} else {
    echo '<script type="text/javascript">
    alert("password tidak sama");
    </script>';
}

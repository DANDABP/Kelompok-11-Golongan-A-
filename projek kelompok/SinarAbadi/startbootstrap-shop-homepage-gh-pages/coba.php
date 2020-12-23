<?php
include "koneksi.php";
$email = $_GET['email'];
$querry = mysqli_query($koneksi, "select*from admin where email='$email'");

$cek = mysqli_num_rows($querry);
if ($cek > 0) {
    $result = mysqli_query($koneksi, "select password from admin where email='$email'");
    $pswrd = mysqli_fetch_row($result);
    var_dump($pswrd[3]);
} else {
}

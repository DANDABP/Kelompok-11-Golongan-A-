<?php
include 'dashboard_koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "delete from user where id='$id'");

header("location:dashboard_index.php?pesan=hapus");
?>

<?php
include "koneksi.php";
$id_barang = $_POST["id_barang"];
$nama = $_POST["nama"];
$harga = $_POST["harga"];
$kategori = $_POST["ketegori"];

$sql = "update barang set id_barang='$id_barang', nama='$nama', harga='$harga', kategori='$kategori' where id_barang = '$id'";

$hasil = mysqli_query($koneksi, $sql);

header("location:update-barang.php?id_barang=$id_barang");
?>
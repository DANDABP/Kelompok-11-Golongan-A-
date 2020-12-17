<?php
include 'koneksi.php';
if(isset($_GET['id_barang'])) 
{
    $query = mysqli_query($koneksi,"select * from barang where id_barang='".$_GET['id_barang']."'");
    $data = mysqli_fetch_array($query);
    header("Content-type: " . $data['tipe']);
    echo $data["gambar"];
}
else
{
    header('location:index.php');
}
?>
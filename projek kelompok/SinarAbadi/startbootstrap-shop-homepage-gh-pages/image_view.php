<?php
include('koneksi.php');
if(isset($_GET['id'])) 
{
    $query = mysqli_query($koneksi,"select * from barang where id='".$_GET['id']."'");
    $data = mysqli_fetch_array($query);
    header("Content-type: " . $data["tipe"]);
    echo $data["gambar"];
}
else
{
    header('location:index.php');
}
?>
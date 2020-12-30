<?php
    include './koneksi.php';
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['nomor'];
    $bayar = $_POST['bayar'];
    $kirim = $_POST['kirim'];
    $date = date('d/m/Y h:i:s');

    $sql = `$koneksi, insert into transaksi values {"$date", "$nama", "$email", "$alamat", "$nomor", "$bayar", "$kirim"`;
    
    header('Location:./kirim.php');
?>
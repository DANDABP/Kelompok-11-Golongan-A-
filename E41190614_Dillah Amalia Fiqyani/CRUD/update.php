<?php
    include 'koneksi.php';
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];

    mysqli_query($koneksi, "UPDATE user SET nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan' WHERE id='$id'");

    header("location:index.php?pesan=update");
?>
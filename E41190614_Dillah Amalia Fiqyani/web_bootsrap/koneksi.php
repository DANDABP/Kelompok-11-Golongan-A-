<?php
    $koneksi = mysqli_connect("localhost","root","","login");

    if(mysqli_connect_error()) {
        # code..
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>
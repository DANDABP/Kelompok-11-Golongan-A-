<?php
$koneksi = mysqli_connect("127.0.0.1", "root", "", "db_sinarabadi");

if(mysqli_connect_error()){
    echo "koneksi database gagal : ".mysqli_connect_error();
}
?>
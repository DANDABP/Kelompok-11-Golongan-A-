<?php
$koneksi = mysqli_connect("localhost", "root", "", "web_boostrap");
if (mysqli_connect_error()) {
    echo "koneksi database gagal" . mysqli_connect_error();
}

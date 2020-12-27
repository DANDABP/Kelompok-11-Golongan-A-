<?php
$host = "127.0.0.1";
$dbname = "si_web_pdo";
$username = "root";
$password = "";

$koneksi = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
?>
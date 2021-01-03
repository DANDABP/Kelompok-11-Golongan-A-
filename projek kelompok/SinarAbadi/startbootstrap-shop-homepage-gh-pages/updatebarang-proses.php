<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_sinarabadi";
try {
//create PDO connection 
$db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch (PDOException $e) {
//show error
die("Terjadi masalah: " . $e->getMessage());
}
$id_barang = $_POST["id_barang"];
$nama = $_POST["nama"];
$harga = $_POST["harga"];
$kategori = $_POST["kategori"];

$sql = "UPDATE `barang` SET `nama` = '$nama', `id_barang` = '$id_barang', `harga` = '$harga', `kategori` = '$kategori' WHERE `barang`.`id_barang` = $id_barang";
$stmt = $db->prepare($sql);
$saved = $stmt->execute();

header("location:update-barang.php?id_barang=$id_barang");
?>
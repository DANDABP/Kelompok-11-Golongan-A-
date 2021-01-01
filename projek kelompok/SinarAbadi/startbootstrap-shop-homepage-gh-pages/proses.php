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
    $nama = $_GET['nama'];
    $email = $_GET['email'];
    $alamat = $_GET['alamat'];
    $nomor = $_GET['nomor'];
    $bayar = $_GET['bayar'];
    $kirim = $_GET['kirim'];
    $bukti = $_POST['bukti'];
    $date = date('d/m/Y h:i:s');

    $sql = ("insert into transaksi(id_transaksi, nama, email, alamat, nomor, bayar, kirim, bukti) values (:date, :nama, :email, :alamat, :nomor, :bayar, :kirim, :bukti)");
    $stmt = $db->prepare($sql);
    $params = array(
        ":date"=>$date,
        ":nama"=>$nama,
        ":email"=>$email,
        ":alamat"=>$alamat,
        ":nomor"=>$nomor,
        ":bayar"=>$bayar,
        ":kirim"=>$kirim,
        ":bukti"=>$bukti
    );
    $saved = $stmt->execute($params);

    header('Location:./kirim.php');
?>
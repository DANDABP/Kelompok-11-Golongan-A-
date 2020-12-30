<?php
    include './koneksi.php';
    $total = $_GET['total'];
    $nama = $_POST['name'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['nomor'];
    $bayar = $_POST['bayar'];
    $kirim = $_POST['kirim'];
    $date = date('d/m/Y h:i:s');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses.php" method="post">
        <h3 name="nama">nama : <?php echo $nama; ?></h3>
        <h3 name="alamat">alamat : <?php echo $alamat; ?></h3>
        <h3 name="email">email : <?php echo $email; ?></h3>
        <h3 name="bayar">metode pembayaran : <?php echo $bayar; ?></h3>
        <h3 name="kirim">metode pengiriman : <?php echo $kirim; ?></h3>
        <h3 name="total">total : <?php echo $total; ?></h3>
        <h3>bukti pembayaran</h3>
        <input type="file" name="bukti" id="bukti"><br><br>
        <input type="submit" value="berikutnya">
    </form>
</body>
</html>
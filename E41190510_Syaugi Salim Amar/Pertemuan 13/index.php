<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>
<body>
    <?php
        require 'koneksi.php';
    ?>

    <table border = '1'>
        <thead>
            <td>NO</td>
            <td>NAMA</td>
        </thead>

        <tbody>
            <?php
            $sql = $koneksi->query('select * from barang');
            while ($data = $sql -> fetch()){
            ?>
            <tr>
            <td><?php echo $data['no']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
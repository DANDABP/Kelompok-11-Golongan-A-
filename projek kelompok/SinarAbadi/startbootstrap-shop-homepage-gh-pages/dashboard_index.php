<!DOCTYPE html>
<html>
<head>
    <title>Admin Sinar Abadi</title>
    <link rel="stylesheet" type="text/css" href="dashboard_style.css">
</head>
<body>
    <div class="judul">
        <h1>Dashboard Sinar Abadi</h1>
        <br>
    </div>
    <br>
    <?php
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        if ($pesan == 'input') {
            echo "Data berhasil di input";
        } elseif ($pesan == "update") {
            echo "Data berhasil di update";
        } elseif ($pesan == "hapus") {
            echo "Data berhasil di hapus";
        }
    }
    ?>
    <br>

    <a href="dashboard_input.php" class="tombol"> + Tambah Data Baru</a>
    <br>
    <br>

    <h3>Data Barang</h3>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jumlah Barang</th>
            <th>Foto Barang</th>
            <th>Opsi</th>
        </tr>
        <?php
        include "dashboard_koneksi.php";
        $query_mysql = mysqli_query($koneksi,"select * from user");
        $nomor = 1;
        while ($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['pekerjaan']; ?></td>
                <td>
                    <a href="dashboard_edit.php?id=<?php echo $data['id']; ?>" class="edit">Edit</a>
                    <a href="dashboard_hapus.php?id=<?php echo $data['id']; ?>" class="hapus">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html> 
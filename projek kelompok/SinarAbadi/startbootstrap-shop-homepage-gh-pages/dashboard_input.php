<!DOCTYPE html>
<html>
<head>
    <title>Membuat CRUD dengan PHP dan MySQL - Menampilkan data dari Database</title>
    <link rel="stylesheet" type="text/css" href="dashboard_style.css">
</head>
<body>
    <div class="judul">
    <h1>Membuat CRUD dengan PHP dan MySQL</h1>
    <h2>Menampilkan dari Database</h2>
    </div>

    <br>

    <a href="dashboard_index.php">Lihat Semua Data</a>

    <br>
    <h3>Input Data Baru</h3>
    <form action="dashboard_input-aksi.php" method="POST">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jumlah Barang</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Foto Barang</td>
                <td><input type="text" name="pekerjaan" class="foto"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan" class="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
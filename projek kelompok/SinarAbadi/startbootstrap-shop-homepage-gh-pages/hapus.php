<?php
include "koneksi.php";
$id = $_GET['id_barang'];
$hapus = mysqli_query($koneksi, "delete from barang where id_barang= $id");
if ($hapus > 0) {
?> <script>
        alert("Data berhasil di hapus")
    </script>
<?php
}

?>
<?php
    include 'koneksi.php';
    if (isset($_GET['search'])){
        $search = $_GET['search'];
        echo $search;

        $sql = mysqli_query($koneksi, "select * from barang where nama like '%".$search."%'");
        $no = 1;
        ?>
        <table>
        <?php
        while($data = mysqli_fetch_array($sql)){
            ?>
            <tr>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['harga']; ?></td>
            </tr>
            </table>
            <?php
        }
    }
?>
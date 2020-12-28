<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" type="image/png" href="logo 2.jpg">
  <title>Sinar Abadi Electronic</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Style Bootstrap -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>


  <!-- Judul Navigasi -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="Logo Sinar Abadi.png" width="25" height="40" alt="Sinar Abadi">
        Sinar Abadi</a>

  <!-- Navigasi Atas -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="pembayaran.html">Pembayaran</a>
            <span class="sr-only">(current)</span>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Konten atau Isi -->

      <!-- Carousel -->

      <?php
include "koneksi.php";
?>
<section>
		<div class="container">
			<div class="row">
         <div class="col-sm-12"> <!--panel-->
         <h2 class="title"><i class="fa fa-shopping-cart fa-fw"></i> Keranjang Belanja</h2>
            <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                <i class="fa fa-shopping-cart fa-fw"></i> Daftar Pembelian</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                        <th>No</th>
                        <th>Nama Produk</td>
                        <th>Gambar</th>
                        <th>Potongan</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Sub Total</th>
                        <th>Opsi</th>

                        </tr>
                    </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $id_keranjang=session_id();
                    $conect=mysqli_connect("127.0.0.1", "root", "", "db_sinarabadi");
                     $ambildata=mysqli_query($conect, "SELECT *from keranjang, barang where id_keranjang='$id_keranjang' and keranjang.id_barang=barang.id_barang  order by id_keranjang asc") or die(mysqli_error($conect));
                     $jumlah=mysqli_num_rows($ambildata);
                    if($jumlah > 0){

                    while($a=mysqli_fetch_array($ambildata)){

                    $disk=($a['harga_produk']*$a['diskon_produk'])/100;
                    $disk_t=$a['harga_produk']-$disk;
                    $rim=$disk_t*$a['qty'];
                    ?>
                    <tr>
                        <td><?php echo $posisi=$posisi+1;?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><a href="<?php echo $data['nama']; ?>src="image_view.php?id_barang=<?php echo $data['id_barang']; ?>" data-rel="prettyPhoto" title="<?php echo $data['nama']; ?>">
                            <img src="image_view.php?id_barang=<?php echo $data['id_barang']; ?>" alt="<?php echo $data['nama']; ?>" style="width:80px; height:70px;"></a></td>
                            <td><?php echo number_format($a['diskon_produk']);?> %</td>
                            <td>

                            <td>
                            <form action="update-keranjang.php" method="post">
                            <input type="hidden" size="5" name="id_barang" value="<?php echo $a['id_barang'];?>">
                                <select name="qty" class="input-select">
                                    <?php $jum=$a['stok_produk'];
                                    for ($i=1; $i<=$jum; $i++){
                                    if($i==$a['qty']){
                                    echo"
                                    <option value='$i' selected>$i</option>";
                                    }
                                    else{echo"
                                    <option value='$i'>$i</option>";
                                    }
                                    }?>
                                </select>
                                <button name="update" class="btn btn-warning btn-sm"> Update</i></button>
                                </form>
                            </td>

                            <td>Rp. <?php echo $data['harga']; ?></td>
                            <td>

                        <a href="hapus-keranjang.php?id_keranjang=<?php echo $a['id_keranjang'];?>&id_barang=<?php echo $a['id_barang'];?>" title="Hapus data"><button name="delete" class="btn btn-danger btn-sm"><i class="fa fa-close fa-fw"></i></button></a>

                        </tr>
                    <?php

                    }


                    ?>
                    <tr>
                        <td colspan="6"><b>Sub Total </b></td>
                        <td><b><?php echo $item;?> Item</b></td>
                        <td><b>Rp. <?php echo number_format($totalsub);?></b></td>
                    </tr>
                    <tr>
                        <td colspan="8"><b>Total Harga </b></td>
                        <td><b>Rp. <?php echo number_format($totalsub);?></b></td>
                    </tr>
                    <tr>
                        <td colspan="11">
                            <a href="checkout.php"><button name="simpan" class="btn btn-danger">Check Out</button></a>
                        </td>
                    </tr>
                    <?php
     }
     else{
         ?>
         <tr>
                        <td colspan="10">
                            Keranjang Anda Masih Kosong, Silahkan Pilih Produk !
                        </td>
                    </tr>
                    <?php
         }
         ?>
                </tbody>
            </table>

           </div>
		</div>
		</div>
         </div>

         <!--panel-->
         </div>
		</div>
	</section>



        </div>
        <!-- /.col-lg-3 -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <br>
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Sinar Abadi</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
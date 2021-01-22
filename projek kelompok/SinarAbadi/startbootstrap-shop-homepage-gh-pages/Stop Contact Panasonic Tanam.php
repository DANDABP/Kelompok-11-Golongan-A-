<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" type="image/png" href="img/logo 2.jpg">
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
      <a class="navbar-brand" href="index.php">
        <img src="img/Logo Sinar Abadi.png" width="25" height="40" alt="Sinar Abadi">
        Sinar Abadi</a>

        <a class="keranjang" href="keranjang.php">
                    <img src="img/keranjang.png" width="35" height="35">

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
            <a class="nav-link" href="pembayaran.php">Pembayaran</a>
            <span class="sr-only">(current)</span>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Konten atau Isi -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Sinar Abadi</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Semua Kategori (Coming Soon)</a>
          <a href="#" class="list-group-item">Lampu (Coming Soon)</a>
          <a href="#" class="list-group-item">Kabel (Coming Soon)</a>
        </div>

      </div>
      <!-- Carousel -->

        <div class="col-lg-9">

        <br>

      <!-- Produk -->
    <div class="col-lg-9">

            <?php
            include 'koneksi.php';
              $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = 14");
              $data = mysqli_fetch_array($query);
            ?>

        <div class="card mt-4" style="width: 350px;">
          <img class="card-img-top img-fluid" src="image_view.php?id_barang=<?php echo $data['id_barang']; ?>" alt="">
          <div class="card-body">
            <h3 class="card-title"><?php echo $data['nama']; ?>
            </h3>
            <h4>Rp <?php echo $data['harga']; ?></h4>
            <p class="card-text"></p>
            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars
            <br>
            <font color="green">STOK TERSEDIA</font>
            <br>
            <a href="keranjang.php?id_barang= <?php echo $data['id_barang']; ?> &action=add" class="btn btn-danger">Masukkan keranjang</a>
            <a href="checkout.php" class="btn btn-danger">Beli Sekarang</a>
          </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4" style="width: 350px;">
          <div class="card-header">
            Product Reviews
          </div>
          <div class="card-body">
            <p>Kualitas produk bagus</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <p>produk bagus, dan berfungsi</p>
            <small class="text-muted">Posted by Anonymous on 3/1/17</small>
            <hr>
            <a href="#" class="btn btn-danger">Leave a Review</a>
          </div>
        </div>


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
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
          <a href="index.php" class="list-group-item">Semua Kategori</a>
          <a href="lampu.php" class="list-group-item">Lampu</a>
          <a href="kabel.php" class="list-group-item">Kabel</a>
        </div>

      </div>
      <!-- Carousel -->

        <div class="col-lg-9">

        <br>

      <!-- Produk -->
      <?php
        include './koneksi.php';
        $total = $_GET['total'];
      ?>

      <div class="card card-outline-secondary my-4" style="width: 500px;">

        <div class="card-body">
          <h5 class="text-uppercase mb-4">Total</h5>
          <ul class="list-unstyled mb-0">
            <li class="border-bottom my-2"></li>
            <li class="d-flex align-items-center justify-content-between mb-4"><strong class="text-uppercase small font-weight-bold">Rp. <?php echo $total; ?></strong></li>
            <li>
            </li>
          </ul>
        </div>
      </div>

<!-- Card Body -->
<div class="card card-outline-secondary my-4" style="width: 500px;">
          <div class="card-header">
              <h4>
            Pengiriman
            </h4>
          </div>
<div class="card-body">
    <form method="post" action="./konfirmasi.php?total=<?php echo $total; ?>">
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama " required>
</div>
<div class="form-group">
    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email " require>
</div>
<div class="form-group">
    <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat Rumah " required>
</div>
<div class="form-group">
    <input type="text" class="form-control form-control-user" id="nomor" name="nomor" placeholder="Nomor Handphone" require>
</div>
<div class="form-group">
    <select class="form-control" id="bayar" name="bayar">
      <option>LinkAja</option>
      <option>ShoppePay</option>
      <option>Gopay</option>
      <option>OVOPay</option>
    </select>
  </div>
  <div class="form-group">
    <select class="form-control" id="kirim" name="kirim">
      <option>kurir</option>
      <option>GoSend</option>
      <option>GrabExpress</option>
    </select>
  </div>
  <div class="col-md-12 text-right"><button type="submit" class="btn btn-outline-dark btn-danger" name="submit">Konfirmasi</button>

</form>
</div>
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
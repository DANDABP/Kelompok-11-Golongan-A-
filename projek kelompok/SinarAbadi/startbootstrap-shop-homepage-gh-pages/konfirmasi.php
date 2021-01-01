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
            <a class="nav-link" href="pembayaran.php">Pembayaran</a>
            <span class="sr-only">(current)</span>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<body>
<center>
<div id="card-content">
<div class="card mt-4" style="width: 500px; text-align: left;" >
    <center>
    <div class="card-header">
    <h3>
		Konfirmasi Pembayaran
        </h3>
	</div></center>
    <div class="card-body">
    <form action="proses.php" method="post">
        <h6 name="nama">Nama : <?php echo $nama; ?></h6>
        <h6 name="alamat">Alamat : <?php echo $alamat; ?></h6>
        <h6 name="email">Email : <?php echo $email; ?></h6>
        <h6 name="bayar">Metode Pembayaran : <?php echo $bayar; ?></h6>
        <h6 name="kirim">Metode Pengiriman : <?php echo $kirim; ?></h6>
        <h6 name="total">Total : <?php echo $total; ?></h6>
        <h6>Bukti Pembayaran</h6><br>
        <input type="file" name="bukti" id="bukti"><br><br><br>
        <div class="card-footer">
        <div class="col-md-12 text-right"><input type="submit" class="btn btn-outline-dark btn-danger" value="berikutnya">
	</div>
        
    </form>
    </div>
    </div>
    
</body>
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
</html>
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
  <?php
    include 'koneksi.php';
  ?>

  <!-- Judul Navigasi -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="img/Logo Sinar Abadi.png" width="25" height="40" alt="Sinar Abadi">
        Sinar Abadi</a>

        <a class="keranjang" href="keranjang.php">
                    <img src="img/keranjang.png" width="35" height="35">

  <!--Tombol Pencarian-->
        <!-- <form>
          <input class="search" type="text" placeholder="Cari..." required>	
          <input class="button" type="button" value="Cari">		
        </form> -->

  <!--Navigasi Atas-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pembayaran.php">Pembayaran</a>
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

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">
              <a href="contact.html" class="site-btn">
              <img class="d-block img-fluid" src="img/Navbar1.jpg" alt="First slide">
              </a>
            </div>

            <div class="carousel-item">
              <a href="pembayaran.php" class="site-btn">
              <img class="d-block img-fluid" src="img/Navbar2.jpg" alt="Second slide">
              </a>
            </div>

            <div class="carousel-item">
              <a href="pembayaran.php" class="site-btn">
              <img class="d-block img-fluid" src="img/Navbar3.jpg" alt="Third slide">
              </a>
            </div>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      
      <!-- Produk -->
        <div class="row">

        <div class="col-lg-4 col-md-6 mb-4">
            <?php
              $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = 10");
              $data = mysqli_fetch_array($query);
            ?>
            <div class="card h-100">
              <a href="OPPLE downlight 5 Watt.php"><img class="card-img-top" src="image_view.php?id_barang=<?php echo $data['id_barang']; ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="OPPLE downlight 5 Watt.php"><?php echo $data['nama']; ?></a>
                </h4>
                <h5>Rp <?php echo $data['harga']; ?></h5>
                <font color="green">STOK TERSEDIA</font>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <?php
              $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = 11");
              $data = mysqli_fetch_array($query);
            ?>
            <div class="card h-100">
              <a href="Led Strip.php"><img class="card-img-top" src="image_view.php?id_barang=<?php echo $data['id_barang']; ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="Led Strip.php"><?php echo $data['nama']; ?></a>
                </h4>
                <h5>Rp <?php echo $data['harga']; ?></h5>
                <font color="green">STOK TERSEDIA</font>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <?php
              $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = 12");
              $data = mysqli_fetch_array($query);
            ?>
            <div class="card h-100">
              <a href="Hannochs Genius 8 Watt.php"><img class="card-img-top" src="image_view.php?id_barang=<?php echo $data['id_barang']; ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="Hannochs Genius 8 Watt.php"><?php echo $data['nama']; ?></a>
                </h4>
                <h5>Rp <?php echo $data['harga']; ?></h5>
                <font color="green">STOK TERSEDIA</font>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <?php
              $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = 13");
              $data = mysqli_fetch_array($query);
            ?>
            <div class="card h-100">
              <a href="Schneider Engkel.php"><img class="card-img-top" src="image_view.php?id_barang=<?php echo $data['id_barang']; ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="Schneider Engkel.php"><?php echo $data['nama']; ?></a>
                </h4>
                <h5>Rp <?php echo $data['harga']; ?></h5>
                <font color="green">STOK TERSEDIA</font>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <?php
              $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = 14");
              $data = mysqli_fetch_array($query);
            ?>
            <div class="card h-100">
              <a href="Stop Contac Panasonic Tanam.php"><img class="card-img-top" src="image_view.php?id_barang=<?php echo $data['id_barang']; ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="Stop Contac Panasonic Tanam.php"><?php echo $data['nama']; ?></a>
                </h4>
                <h5>Rp <?php echo $data['harga']; ?></h5>
                <font color="green">STOK TERSEDIA</font>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <?php
              $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = 15");
              $data = mysqli_fetch_array($query);
            ?>
            <div class="card h-100">
              <a href="Fiting Broco.php"><img class="card-img-top" src="image_view.php?id_barang=<?php echo $data['id_barang']; ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="Fiting Broco.php"><?php echo $data['nama']; ?></a>
                </h4>
                <h5>Rp <?php echo $data['harga']; ?></h5>
                <font color="green">STOK TERSEDIA</font>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <?php
              $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = 16");
              $data = mysqli_fetch_array($query);
            ?>
            <div class="card h-100">
              <a href="Remot Joker Multi.php"><img class="card-img-top" src="image_view.php?id_barang=<?php echo $data['id_barang']; ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="Remot Joker Multi.php"><?php echo $data['nama']; ?></a>
                </h4>
                <h5>Rp <?php echo $data['harga']; ?></h5>
                <font color="green">STOK TERSEDIA</font>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <?php
              $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = 17");
              $data = mysqli_fetch_array($query);
            ?>
            <div class="card h-100">
              <a href="Extrana 2x1.5 50 Meter.php"><img class="card-img-top" src="image_view.php?id_barang=<?php echo $data['id_barang']; ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="Extrana 2x1.5 50 Meter.php"><?php echo $data['nama']; ?></a>
                </h4>
                <h5>Rp <?php echo $data['harga']; ?></h5>
                <font color="green">STOK TERSEDIA</font>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <?php
              $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang = 18");
              $data = mysqli_fetch_array($query);
            ?>
            <div class="card h-100">
              <a href="Extrana NYA 1.5 100 Meter"><img class="card-img-top" src="image_view.php?id_barang=<?php echo $data['id_barang']; ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="Extrana NYA 1.5 100 Meter.php"><?php echo $data['nama']; ?></a>
                </h4>
                <h5>Rp <?php echo $data['harga']; ?></h5>
                <font color="green">STOK TERSEDIA</font>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

        </div>

        <!-- Halaman -->
        <div class="center">
          <ul class="pagination">
            <li><a href="index.php">«</a></li>
            <li><a href="index.php">1</a></li>
            <li><a class="active" href="halaman2.php">2</a></li>
            <li><a href="halaman3.php">3</a></li>
            <li><a href="halaman3.php">»</a></li>
          </ul>
        </div>

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
<br>
  <!-- Footer -->
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
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

      <!--Tombol Pencarian-->
      <form>
        <input class="search" type="text" placeholder="Cari..." required>
        <input class="button" type="button" value="Cari">
      </form>

      <!--Navigasi Atas-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home
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
            <a class="nav-link" href="pembayaran.html">Pembayaran</a>
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
          <a href="index.html" class="list-group-item">Semua Kategori</a>
          <a href="lampu.html" class="list-group-item">Lampu</a>
          <a href="kabel.html" class="list-group-item">Kabel</a>
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
              <img class="d-block img-fluid" src="Navbar1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="Navbar2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="Navbar3.jpg" alt="Third slide">
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
          <?php
          include "koneksi.php";

          $row = mysqli_query($koneksi, "select * from barang");
          $query = mysqli_query($koneksi, "SELECT * FROM barang WHERE kategori = 'kabel'");
          // $data = mysqli_fetch_assoc($query);


          while ($data = mysqli_fetch_assoc($query)) :
            // var_dump($data)
          ?>
            <div class="col-lg-4 col-md-6 mb-4">


              <div class="card h-100">
                <a href="deskripsi.php?id_barang=<?php echo $data['id_barang']; ?>"><img class="card-img-top" src="#" alt=""></a>

                <a href="deskripsi.php?id_barang=<?php echo $data['id_barang']; ?>"><img class="card-img-top" src="image_view.php?id_barang=<?php echo $data['id_barang']; ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="deskripsi.php?id_barang=<?php echo $data['id_barang']; ?>"><?php echo $data['nama']; ?></a>
                  </h4>
                  <h5>Rp <?php echo $data['harga']; ?></h5>
                  <font color="green">STOK TERSEDIA</font>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
          <?php endwhile; ?>

          <!-- <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="vga.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Kabel VGA</a>
                </h4>
                <h5>Rp 28.500</h5>
                <font color="red">STOK HABIS</font>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="hdmi.jfif" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Kabel HDMI</a>
                </h4>
                <h5>Rp 35.000</h5>
                <font color="green">STOK TERSEDIA</font>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="LAN.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Kabel UTP LAN Cat 6</a>
                </h4>
                <h5>Rp 120.000</h5>
                <font color="green">STOK TERSEDIA</font>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="kabel ties.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Kabel Ties</a>
                </h4>
                <h5>Rp 73.000</h5>
                <font color="red">STOK HABIS</font>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="kabel lampu.jpeg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Kabel Lampu</a>
                </h4>
                <h5>Rp 15.000</h5>
                <font color="red">STOK HABIS</font>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div> -->

        </div>

        <!-- /.col-lg-3 -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

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
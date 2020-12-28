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
          <li class="nav-item">
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

      <section class="py-5">
        <h2 class="h3 text-uppercase mb-4">Keranjang Belanja</h2>
        <div class="row">
          <div class="col-lg-8 mb-4 mb-lg-0">
              <!-- CART TABLE-->
      <div class="table-responsive mb-4">
        <table class="table">
          <thead class="bg-light">
            <tr>
              <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Produk</strong></th>
              <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Harga</strong></th>
              <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Kuantitas</strong></th>
              <th class="border-0" scope="col"> <strong class="text-small text-uppercase">Total</strong></th>
              <th class="border-0" scope="col"> </th>
            </tr>
          </thead>

          <?php
            include 'koneksi.php';
            require 'item.php';
            session_start();
            if(isset ($_GET['id_barang']) && !isset ($_POST['update'])){
              $sql = $koneksi->query('select * from barang where id_barang = '.$_GET['id_barang']);
              $data = mysqli_fetch_array($sql);
              $item = new Item();
              $item->id_barang = $data['id_barang'];
              $item->nama = $data['nama'];
              $item->harga = $data['harga'];
              $item->jumlah = 1;

              // cek item

              $index = -1;

              // ubah cart string menjadi array

              $cart = unserialize(serialize($_SESSION['cart']));
              for($i=0; $i<count($cart);$i++)
                if ($cart[$i]->id_barang == $_GET['id_barang']){
                  $index = $i;
                  break;
                }
                if($index == -1) 
                $_SESSION['cart'][] = $item;
                else {
                if (($cart[$index]->jumlah) < $iteminstock)
                  $cart[$index]->jumlah ++;
                  $_SESSION['cart'] = $cart;
              }
            }

            // delete item

            if (isset($_GET['index']) && !isset($_POST['update'])){
              $cart = unserialize(serialize($_SESSION['cart']));
              unset($cart[$_GET['index']]);
              $cart = array_values($cart);
              $_SESSION['cart'] = $cart;
            }

            // update jumlah

            if(isset($_POST['update'])) {
              $arrjumlah = $_POST['jumlah'];
              $cart = unserialize(serialize($_SESSION['cart']));
              for($i=0; $i<count($cart);$i++) {
                $cart[$i]->jumlah = $arrjumlah[$i];
              }
              $_SESSION['cart'] = $cart;
            }
          ?>

          <tbody>
            <?php
              $cart = unserialize(serialize($_SESSION['cart']));
              $s = 0;
              $index = 0;
              for($i=0; $i<count($cart); $i++){
                $s += $cart[$i]->harga * $cart[$i]->jumlah;
            ?>
            <tr>
              <th class="pl-0 border-0" scope="row">
                <div class="media align-items-center">
                  <?php $index; ?>
                  <a href="keranjang.php?index=<?php echo $index; ?>" onclick="return confirm('Are you sure?')" >Delete</a>
                  <a class="reset-anchor d-block animsition-link" href="produk kabel.html"><img src="image_view.php?id_barang=<?php echo $cart[$i]->id_barang; ?>" alt="..." width="70"/></a>
                  <div class="media-body ml-3"><strong class="h6">
                    <a class="reset-anchor animsition-link" href="produk kabel.html"><?php echo $cart[$i]->nama; ?></a></strong>
                  </div>
                </div>
              </th>

              <td class="align-middle border-0">
                <p class="mb-0 small"><?php echo $cart[$i]->harga; ?></p>
              </td>

              <td class="align-middle border-0">
                <div class="border d-flex align-items-center justify-content-between px-3"><span class="small text-uppercase text-gray headings-font-family"></span>
                  <div class="quantity">
                    <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                    <?php echo $cart[$i]->jumlah; ?>
                    <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                  </div>
                </div>
              </td>

              <td class="align-middle border-0">
                <p class="mb-0 small"><?php echo $cart[$i]->harga * $cart[$i]->jumlah; ?>.000</p>
              </td>

              <td class="align-middle border-0"><a class="reset-anchor" href="#"><i class="fas fa-trash-alt small text-muted"></i></a></td>
            </tr><?php }?>
            
          </tbody>
        </table>
      </div>
      <!-- CART NAV-->
      <div class="bg-light px-4 py-3">
        <div class="row align-items-center text-center">
          <div class="col-md-6 mb-3 mb-md-0 text-md-left"><a class="btn btn-link p-0 text-dark btn-sm" href="#"><i class="fas fa-long-arrow-alt-left mr-2"> </i>Continue shopping</a></div>
          <div class="col-md-6 text-md-right"><a class="btn btn-outline-dark btn-danger" href="#">Checkout<i class="fas fa-long-arrow-alt-right ml-2"></i></a></div>
        </div>
      </div>
    </div>
    <!-- ORDER TOTAL-->
    <div class="col-lg-4">
      <div class="card border-0 rounded-0 p-lg-4 bg-light">
        <div class="card-body">
          <h5 class="text-uppercase mb-4">Total</h5>
          <ul class="list-unstyled mb-0">
            <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small font-weight-bold">Subtotal</strong><span class="text-muted small">Rp. 120.00
                <br> Rp. 28.500
            </span></li>
            <li class="border-bottom my-2"></li>
            <li class="d-flex align-items-center justify-content-between mb-4"><strong class="text-uppercase small font-weight-bold">Total</strong><span>Rp. 148.500</span></li>
            <li>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
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
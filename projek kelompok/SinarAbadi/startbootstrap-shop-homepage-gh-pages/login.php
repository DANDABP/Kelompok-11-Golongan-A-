<?php
session_start();
if (isset($_SESSION['username'])) {
  header("location:admin.php");
  exit;
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="icon" type="image/png" href="img/logo 2.jpg">
  <title>Sinar Abadi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Costum Style -->
  <link href="css/login.css" rel="stylesheet">
</head>

<body>
  <div id="card">
    <?php
    if (isset($_GET['pesan'])) {
      $pesan = $_GET['pesan'];
      if ($pesan == "gagal") {
    ?>
        <div class="alert alert-danger">Anda gagal login silahkan masukkan usernamae dan password dengan benar</div>
    <?php
      }
    }
    ?>
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
      <form method="post" class="form" action="login-proses.php">

        <label for="user-email" style="padding-top:13px">
          &nbsp;Email
        </label>
        <input id="email" class="form-content" type="email" name="email" autocomplete="on" required />
        <div class="form-border"></div>

        <label for="user-password" style="padding-top:22px">
          &nbsp;Password
        </label>
        <input id="password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>

        <a href="lupa-password.php">
          <legend id="forgot-pass">Forgot password?</legend>
        </a>

        <input id="submit-btn" type="submit" name="submit" value="LOGIN" />

      </form>
    </div>
  </div>
</body>

</html>
<?php
session_start();

$user = $_POST['username'];
$password = base64_encode($_POST['password']);

$_SESSION['user'] = $user;


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>

<body>
  <?php if (@$_SESSION['user'] == '') {
    echo "<script>
                      alert('Silahkan Login Dahulu...')
                      window.location='index.php';
                  </script>";
  } else { ?>
    <h3>SELAMAT DATANG <label style="color:red"><?php echo $_SESSION['user'] ?></label> ANDA BERHASIL LOGIN</h3>
    <br>
    <br>
    <a href="logout.php">Logout</a>
  <?php } ?>
</body>

</html>
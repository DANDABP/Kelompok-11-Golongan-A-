<?php
include "koneksi.php";
$email = $_GET['email'];
$querry = mysqli_query($koneksi, "select*from admin where email='$email'");
$result = mysqli_query($koneksi, "select password from admin where email='$email'");

$cek = mysqli_num_rows($querry);
if ($cek > 0) {
  $pswrd = mysqli_fetch_row($result);
  var_dump($pswrd);
  // $hasil = implode($pswrd);

?>
  <script>
    alert('password anda adalah <?php echo "$hasil" ?>')
    window.location = "login.php";
  </script>
<?php
  // header("location:login.php?");
} else {
  header("location:lupa-password.php?pesan=gagal");
}

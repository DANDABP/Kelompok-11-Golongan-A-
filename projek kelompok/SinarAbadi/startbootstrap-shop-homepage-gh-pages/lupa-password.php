<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Sinar Abadi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Costum Style -->
    <link href="css/login.css" rel="stylesheet">
</head>

<body>
    <div id="card">
        <div id="card">
            <?php
            if (isset($_GET['pesan'])) {
                $pesan = $_GET['pesan'];
                if ($pesan == "gagal") {

            ?>
                    <!-- <div class="alert alert-danger">Anda gagal login silahkan masukkan usernamae dan password dengan benar</div> -->

                    <script>
                        alert('email yang anda masukkan tidak terdaftar')
                    </script>
            <?php
                }
            }
            ?>
            <div id="card-content">
                <div id="card-title">
                    <h2>Masukkan Email</h2>
                    <div class="underline-title"></div>
                </div>
                <form method="get" class="form" action="reset-password-proses.php">
                    <label for="user-email" style="padding-top:13px">
                        &nbsp;Email
                    </label>
                    <input id="email" class="form-content" type="email" name="email" autocomplete="on" required />
                    <div class="form-border"></div>
                    <input id="submit-btn" type="submit" name="submit" value="SUBMIT" />

                </form>
            </div>
        </div>
</body>

</html>
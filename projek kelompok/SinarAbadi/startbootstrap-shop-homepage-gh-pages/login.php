<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:admin.php");
    exit;
}

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
    <link href="css/login.css" rel="stylesheet">

</head>

<body>

    <form action="login-proses.php" method="POST">
        <div class="container mt-5 p-5 border border-dark rounded">
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
            <div class="card-body ">
                <div class="d-flex flex-row">
                    <div class="col-lg-5 p-5">
                        <h2>Login</h2>
                        <div class="form-group mt-5 mx-4">
                            <input type="text" class="form-control" name="username" placeholder="username">
                        </div>
                        <div class="form-group mb-3 mx-4">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary center-block">Submit</button>
                    </div>
                    <div class="col">

                    </div>
                </div>
            </div>

        </div>
    </form>
    <style>
        .col {
            background-image: url(onlineshooping.png);
            background-size: cover;
        }

        h2 {
            text-align: center;
        }

        button {
            margin-left: 120px;
        }
    </style>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
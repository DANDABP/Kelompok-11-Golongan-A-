<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">
        <?php
            $login;
            $username = 'syaugi';
            $pass = 'syaugi';

            $usernamelog = $_POST['username'];
            $passlog = $_POST['pass'];
            
            if($username == $usernamelog && $pass == $passlog){
                echo "Selamat anda berhasil Log In dengan username : $username";
                $login = "LogOut";
                session_start();
                $_SESSION['username'] = $username;
            }else{
                echo "<script>alert ('Maaf username atau Password salah');</script>";
                echo "Silahkan Log In ulang";
                $login = "LogIn";
            }

            if(!isset($_SESSION['username'])){
                header ("Location:login.php");
            }
            echo "<br>";
            echo "<input type=submit value=$login>";
        ?>

        
    </form>
</body>
</html>
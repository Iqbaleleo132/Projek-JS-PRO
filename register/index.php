<?php 
session_start();
require '../admin/functions.php';

if(isset($_POST["kirim"])){
    if(daftarAkun($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data user berhasil ditambahkan');
            window.location = 'user.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data user gagal ditambahkan');
            window.location = 'user.php';
        </script>
    ";
    }
}

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class="header">
<nav class="navbar navbar-expand-lg light ">
            <div class="container-fluid">
                <a href="../index.php" class="navbar-brand">
                    <h4 style="color:black">JS <span style="color:red">PRO</span></h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col-1.5">
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="container">
                            <div class="row">
                                <div class="navbar-nav ">
                                    <a class="nav-link current" href="../index.php">Home</a>
                                    <a class="nav-link" href="#">Categories</a>
                                    <a class="nav-link" href="#">Product</a>
                                    <!-- <a class="btn btn-primary" href="login/index.php" role="button">login</a>
                                    <a class="btn btn-secondary" href="register/index.php" role="button">Register</a> -->
                                    <div class="icons-home">
                                      <a href="#"><i class='bx bx-user'></i></a>
                                      <a href="#"><i class='bx bx-cart-alt ms-2'></i></a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
        </nav>
</div>

<div class="wrapper fadeInDown">
  <div id="formContent">


    <div class="fadeIn first">
      <h3>Register</h3>
      <p>Sudah punya akun jspro? <a href="../login/index.php">Login Sekarang</a></p>
    </div>

    <form action="process.php">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Register">
    </form>

    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
<footer>
          <center>
            <p>Copyright By Iqbal Maulana</p>
          </center>
        </footer>
</body>
</html>
</body>
</html>
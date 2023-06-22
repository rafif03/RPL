<?php
  ob_start();
  if(isset($_POST["sumbit"])){
    if($_POST["secret"] == "Rahasia"){
        header("location:pesanan.php");
    } else {
        echo "<script> alert('Salah Wlee'); </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!"><img src="assets/vanlogo.jpg" alt="Logo" class="rounded-circle" width="60"> </a>
                <button class="navbar-toggler btn btn-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-dark navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="support.php">Support</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="faq.php">FAQ's</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="py-5">
            <div class="container admin d-flex justify-content-center text-white text-center">
                <form method="post">
                    <h4>Login Admin</h4>
                    <br>
                    <div class="form-group">
                        <input type="password" name="secret" class="form-control" placeholder="Masukkan Kode Rahasia">
                    </div>
                    <br>
                    <button class="btn btn-login"type="sumbit"name="sumbit">Masuk sebagai Admin</button>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container text-white">
                <h3 class="m-0 text-white">Vann.store</h3>
                <h5 class="m-0 text-white">Website top-up terbesar, tercepat dan terpercaya di Indonesia</h5>
                <div class="row">
                    <div class="col">Top Up Cepat</div>
                    <div class="col">Metode Bayar Banyak</div>
                    <div class="w-100"></div>
                    <div class="col">Pengiriman Cepat</div>
                    <div class="col">CS Ramah dan Cepat</div>
                </div>           
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
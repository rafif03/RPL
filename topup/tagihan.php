<?php
    ob_start();
    function query(){
        $conn = mysqli_connect("localhost", "root","","topup");
        $ID = $_GET["id"];
        $rows = mysqli_query($conn, "SELECT * FROM game WHERE id = $ID");
        return $rows;
    }

    $rows = mysqli_fetch_array(query());

    $item = item($rows["IDItem"]);
    function item($id){
        $conn = mysqli_connect("localhost", "root","","topup");
        $item = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM pesanan WHERE IDItem = $id"));
        return $item;
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
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
        <!-- Header-->
        <header class="bg-body py-5">
            <div class="container px-4 px-lg-5 my-5 edit-form">
                <div class="row justify"><h4 class="text-white text-center">Rincian Pembayaran</h4></div>
                <br>
                <div class="row text">
                    <div class="col-4"><h5 class="text-white">Game</h5></div>
                    <div class="col-7"><h5 class="text-white" style="text-align: right;"><?= $rows["game"] ?></h5></div>
                </div>
                <div class="row text">
                    <div class="col-4"><h5 class="text-white">Nick</h5></div>
                    <div class="col-7"><h5 class="text-white" style="text-align: right;"><?= $rows["Nick"] ?></h5></div>
                </div>
                <div class="row text">
                    <div class="col-4"><h5 class="text-white">ID</h5></div>
                    <div class="col-7"><h5 class="text-white" style="text-align: right;"><?= $rows["IDUser"] ?></h5></div>
                </div>
                <div class="row text">
                    <div class="col-4"><h5 class="text-white">Server</h5></div>
                    <div class="col-7"><h5 class="text-white" style="text-align: right;"><?= $rows["Server"] ?></h5></div>
                </div>
                <div class="row text">
                    <div class="col-4"><h5 class="text-white">Item</h5></div>
                    <div class="col-7"><h5 class="text-white" style="text-align: right;"><?= $item["Nama"] ?></h5></div>
                </div>
                <div class="row text">
                    <div class="col-4"><h5 class="text-white">Harga</h5></div>
                    <div class="col-7"><h5 class="text-white" style="text-align: right;">IDR <?= $item["Harga"] ?></h5></div>
                </div>
                <div class="row text">
                    <div class="col-4"><h5 class="text-white">Metode Bayar</h5></div>
                    <div class="col-7"><h5 class="text-white" style="text-align: right;"><?= $rows["metode"] ?></h5></div>
                </div>
                <div class="row text">
                    <div class="col-4"><h5 class="text-white">Status</h5></div>
                    <div class="col-7"><h5 class="text-white" style="text-align: right;"><?= $rows["Status"] ?></h5></div>
                </div>
                <br>
                <div class="row">
                    <a href="index.php"><button class="btn btn-login">Home</button></a>
                </div>
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

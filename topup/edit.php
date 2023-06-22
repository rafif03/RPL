<?php
    ob_start();
    function query($id){
        $conn = mysqli_connect("localhost", "root","","topup");
        $rows = mysqli_query($conn, "SELECT * FROM game WHERE game.id = $id");
        return $rows;
    }

    $rows = mysqli_fetch_array(query($_GET["id"]));

    if(isset($_POST["submit"])){
        update($_POST["submit"]);
    }
    function update($data){
        $conn = mysqli_connect("localhost", "root","","topup");
        $Nick = htmlspecialchars($_POST["Nick"]);
        $IDUser = htmlspecialchars($_POST["IDUser"]);
        $Server = htmlspecialchars($_POST["Server"]);
        $IDItem = htmlspecialchars($_POST["IDItem"]);
        $Method = htmlspecialchars($_POST["metode"]);
        $Status = htmlspecialchars($_POST["Status"]);
        $id = $_GET["id"];
        $query = "UPDATE game SET Nick='$Nick', IDUser='$IDUser', Server='$Server', IDItem='$IDItem', metode='$Method', Status='$Status' WHERE id=$id";
        mysqli_query($conn, $query);
        header("Location:pesanan.php");
    } 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit</title>
        <!-- Icon-->
        <link rel="icon" type="image/x-icon" href="assets/vanlogo.jpg" />
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
                <form method="post">
                    <div class="row">
                        <div class="col-4"><h4 class="text-white">Game</h4></div>
                        <div class="col-6">
                        <div class="input-group input-group-sm mb-3">
                                <input class="form-control xs" id="ex1" type="text" value="<?= $rows["game"]?>" disabled>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-4"><h4 class="text-white">Nick</h4></div>
                        <div class="col-6">
                            <div class="input-group input-group-sm mb-3">
                                <input class="form-control xs" name="Nick" id="ex1" type="text" value="<?= $rows["Nick"]?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4"><h4 class="text-white">ID</h4></div>
                        <div class="col-6">
                            <div class="input-group input-group-sm mb-3">
                                <input class="form-control xs" name="IDUser" id="ex1" type="text" value="<?= $rows["IDUser"]?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4"><h4 class="text-white">Server</h4></div>
                        <div class="col-6">
                            <div class="input-group input-group-sm mb-3">
                                <input class="form-control xs" name="Server" id="ex1" type="text" value="<?= $rows["Server"]?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4"><h4 class="text-white">ID Item (1-31)</h4></div>
                        <div class="col-6">
                            <div class="input-group input-group-sm mb-3">
                                <input class="form-control xs" name="IDItem" id="ex1" value="<?= $rows["IDItem"]?>" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4"><h4 class="text-white">Metode</h4></div>
                        <div class="col-6">
                            <div class="input-group input-group-sm mb-3">
                                <input class="form-control xs" name="metode" id="ex1" value="<?= $rows["metode"]?>" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4"><h4 class="text-white">Status</h4></div>
                        <div class="col-6">
                            <div class="input-group input-group-lg mb-3">
                                <select class="custom-select" id="inputGroupSelect01" name="Status" value="<?= $rows["Status"]?>">
                                <option value="Pending">Pending</option>
                                <option value="In Progress">In Progress</option>
                                <option value="Done">Done</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <button class="btn btn-login" name="submit" type="submit">Kirim</button>
                    </div>
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
<?php

?>
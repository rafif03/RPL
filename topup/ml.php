<?php
  ob_start();
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
                        <li class="nav-item"><a class="nav-link active text-white" aria-current="page" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="support.html">Support</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="faq.html">FAQ's</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-body py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <img src="assets/banml.png" alt="Banner ML" class="img-fluid img-thumbnail">
                </div>
            </div>
        </header>

        <h1 class="text-center text-weight-bold text-white">Top Up Mobile Legends</h1>
        <!-- Section-->
        <section class="py-5">
            <form class="pd-form" method="post">
                <div class="container px-4 px-lg-5 mt-5">
                    <div class="row">
                        <div class="col-1"><img width="50" height="50" src="https://img.icons8.com/ios-filled/50/FFFFFF/1.png" alt="1"/></div>
                        <div class="col-8"> 
                            <div class="form-group">
                                <input type="text" class="form-control" name="nick" placeholder="Masukkan Nickname" required>
                              </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-1"><img width="50" height="50" src="https://img.icons8.com/ios-filled/50/FFFFFF/2.png" alt="2"/></div>
                        <div class="col-6"> 
                            <div class="form-group">
                                <input type="name" class="form-control" name="ID" placeholder="Masukkan ID" required>
                              </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-1"><img width="50" height="50" src="https://img.icons8.com/ios-filled/50/FFFFFF/3.png" alt="3"/></div>
                        <div class="col-6"> 
                            <div class="form-group">
                                <input type="name" class="form-control" name="Server" placeholder="Masukkan Server">
                              </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-1"><img width="50" height="50" src="https://img.icons8.com/ios-filled/50/FFFFFF/4.png" alt="4"/></div>
                        <div class="col-8"><h4 class="text-white" style="margin-top:8px;">Pilih Item</h4></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>
                                <input type="radio" value="1" name="product" class="card-input-element" />
                                  <div class="card card-input">
                                    <div class="card-img-top"><img width="186" height="180" src="assets/diamond.png"></div>
                                    <div class="card-header text-center"><h4>86 Diamond</h4></div>
                                    <div class="card-body text-center">
                                      Rp. 19.200,-
                                    </div>
                                  </div>
                              </label>
                        </div>
                        <div class="col">
                            <label>
                                <input type="radio" value="2" name="product" class="card-input-element" />
                                  <div class="card card-input">
                                    <div class="card-img-top"><img width="186" height="180" src="assets/diamond.png"></div>
                                    <div class="card-header text-center"><h4>172 Diamond</h4></div>
                                    <div class="card-body text-center">
                                      Rp. 38.100,-
                                    </div>
                                  </div>
                              </label>
                        </div>
                        <div class="col">
                            <label>
                                <input type="radio" value="3" name="product" class="card-input-element" />
                                  <div class="card card-input">
                                    <div class="card-img-top"><img width="186" height="180" src="assets/diamond.png"></div>
                                    <div class="card-header text-center"><h4>257 Diamond</h4></div>
                                    <div class="card-body text-center">
                                      Rp. 57.300,-
                                    </div>
                                  </div>
                              </label>
                        </div>
                        <div class="col">
                            <label>
                                <input type="radio" value="4" name="product" class="card-input-element" />
                                  <div class="card card-input">
                                    <div class="card-img-top"><img width="186" height="180" src="assets/diamond.png"></div>
                                    <div class="card-header text-center"><h4>344 Diamond</h4></div>
                                    <div class="card-body text-center">
                                      Rp. 76.200,-
                                    </div>
                                  </div>
                              </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>
                                <input type="radio" value="5" name="product" class="card-input-element" />
                                  <div class="card card-input">
                                    <div class="card-img-top"><img width="186" height="180" src="assets/diamond.png"></div>
                                    <div class="card-header text-center"><h4>429 Diamond</h4></div>
                                    <div class="card-body text-center">
                                      Rp. 95.400,-
                                    </div>
                                  </div>
                              </label>
                        </div>
                        <div class="col">
                            <label>
                                <input type="radio" value="6" name="product" class="card-input-element" />
                                  <div class="card card-input">
                                    <div class="card-img-top"><img width="186" height="180" src="assets/diamond.png"></div>
                                    <div class="card-header text-center"><h4>514 Diamond</h4></div>
                                    <div class="card-body text-center">
                                      Rp. 114.600,-
                                    </div>
                                  </div>
                              </label>
                        </div>
                        <div class="col">
                            <label>
                                <input type="radio" value="7" name="product" class="card-input-element" />
                                  <div class="card card-input">
                                    <div class="card-img-top"><img width="186" height="180" src="assets/diamond.png"></div>
                                    <div class="card-header text-center"><h4>716 Diamond</h4></div>
                                    <div class="card-body text-center">
                                      Rp. 153.000,-
                                    </div>
                                  </div>
                              </label>
                        </div>
                        <div class="col">
                            <label>
                                <input type="radio" value="8"  name="product" class="card-input-element" />
                                  <div class="card card-input">
                                    <div class="card-img-top"><img width="186" height="180" src="assets/diamond.png"></div>
                                    <div class="card-header text-center"><h4>1050 Diamond</h4></div>
                                    <div class="card-body text-center">
                                      Rp. 229.500,-
                                    </div>
                                  </div>
                              </label>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-1"><img width="50" height="50" src="https://img.icons8.com/ios-filled/50/FFFFFF/5.png" alt="5"/></div>
                        <div class="col-8"><h4 class="text-white" style="margin-top:8px;">Pilih Metode Pembayaran</h4></div>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                <label>
                                  <input type="radio" value="ShopeePay" name="metode" class="card-input-element" />
                                  <div class="card card-input">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-1"><img width="40" height="40" src="assets/shopee.png"></div>
                                            <div class="col-6"><h4 style="margin-top:8px;">Shopee 082138562787</h4></div>
                                        </div>
                                    </div>
                                  </div>
                                  </label>
                            </div>
                            <div class="row">
                                <label>
                                    <input type="radio" value="GoPay" name="metode" class="card-input-element" />
                                      <div class="card card-input">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-1"><img width="40" height="40" src="assets/gopay.png"></div>
                                                <div class="col-6"><h4 style="margin-top:8px;">Gopay 082138562787</h4></div>
                                            </div>
                                        </div>
                                      </div>
                                  </label>
                            </div>
                            <div class="row">
                                <label>
                                  <input type="radio" value="Dana" name="metode" class="card-input-element" />
                                  <div class="card card-input">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-1"><img width="40" height="40" src="assets/dana.png"></div>
                                            <div class="col-6"><h4 style="margin-top:8px;">Dana 082138562787</h4></div>
                                        </div>
                                    </div>
                                  </div>
                                  </label>
                            </div>
                            <div class="row">
                                <label>
                                  <input type="radio" value="BCA" name="metode" class="card-input-element" />
                                  <div class="card card-input">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-1"><img width="40" height="40" src="assets/bca.png"></div>
                                            <div class="col-6"><h4 style="margin-top:8px;">BCA 0153938692</h4></div>
                                  </label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-1"><img width="50" height="50" src="https://img.icons8.com/ios-filled/50/FFFFFF/6.png" alt="6"/></div>
                        <div class="col-4"> 
                            <div class="form-group">
                                <input type="name" name="HP" class="form-control" placeholder="Masukkan Nomor HP" required>
                              </div>
                        </div>
                        <div class="col-4"> 
                            <div class="form-group">
                                <input type="name" name="Email" class="form-control" placeholder="Masukkan Email" required>
                              </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <button class="btn btn-light" type="submit" name="submit">Buat Pesanan!</button>
                    </div>
                </div>
            </form>
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
$conn = mysqli_connect("localhost", "root","","topup");

  if(isset($_POST["submit"])){
    insert($_POST["submit"]);
  }
function insert($data){
    $conn = mysqli_connect("localhost", "root","","topup");
    $Nick = htmlspecialchars($_POST["nick"]);
    $ID = htmlspecialchars($_POST["ID"]);
    $Server = htmlspecialchars($_POST["Server"]);
    $Product = htmlspecialchars($_POST["product"]);
    $Method = htmlspecialchars($_POST["metode"]);
    $HP = htmlspecialchars($_POST["HP"]);
    $Email = htmlspecialchars($_POST["Email"]);
    $query = "INSERT INTO game(game, nick, IDUser, Server, IDItem, metode, mobile, email, Status) VALUES ('Mobile Legends', '$Nick', '$ID', '$Server', '$Product', '$Method', '$HP', '$Email', 'Pending')";
    mysqli_query($conn, $query);
    $result = mysqli_query($conn, "SELECT id FROM game ORDER BY id DESC LIMIT 1");
    $row = mysqli_fetch_array($result);
    $IDPesanan = $row[0];
    header("location:tagihan.php?id=$IDPesanan");
  } 
?>

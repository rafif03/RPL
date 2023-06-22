<?php
    $conn = mysqli_connect("localhost", "root","","topup");
    $Kode = $_GET["id"];
    $query = "DELETE FROM game WHERE id='$Kode'";
    mysqli_query($conn, $query);
    header("Location:pesanan.php");
       
?>

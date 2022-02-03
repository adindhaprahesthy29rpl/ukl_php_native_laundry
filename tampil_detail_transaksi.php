<?php
session_start();
if($_SESSION['role']=="admin"){
    include ("admin.php"); 
}elseif ($_SESSION['role']=="kasir"){
include ("kasir.php");
}
$base_url = "http://localhost/ukl_laundry/"; //digunakan untuk menghubungkan setiap page supaya webnya dinamis
?>

<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tampil Detail Transaksi</h3>
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>ID TRANSAKSI</th>
                <th>PAKET</th>
                <th>HARGA</th>
                <th>QTY</th>
            </tr>
        </thead>

        <tbody>

            <?php 
            include "koneksi.php";
            $qry_transaksi=mysqli_query($conn,"select detail_transaksi.id_transaksi as id_transaksi, paket.jenis as jenis, paket.harga as harga, detail_transaksi.qty as qty from detail_transaksi JOIN paket ON paket.id_paket = detail_transaksi.id_paket WHERE detail_transaksi.id_transaksi = ".$_GET['id_transaksi']);
            $no=0;

            while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
            $no++;?>
            <tr>              
                 <td><?=$no?></td>
                  <td><?=$data_transaksi['id_transaksi']?></td>
                  <td><?=$data_transaksi['jenis']?></td>
                  <td><?=$data_transaksi['harga']?></td>
                  <td><?=$data_transaksi['qty']?></td>
            </tr>
            <?php 
            }

            ?>

        </tbody>

    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>
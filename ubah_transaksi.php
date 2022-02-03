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
    <?php 
    include "koneksi.php";
$qry_get_transaksi=mysqli_query($conn,"select * from transaksi where id_transaksi = '".$_GET['id_transaksi']."'");

$dt_transaksi=mysqli_fetch_array($qry_get_transaksi);

?>
<div class="container">
    <center><h3>Ubah Transaksi</h3></center>

    <form action="proses_ubah_transaksi.php" method="post" enctype="multipart/form-data">
        
        <input type="hidden" name="id_transaksi" value="<?=$dt_transaksi['id_transaksi']?>">

        Tanggal Bayar :
        <input type="date" name="tgl_bayar" value="" class="form-control">
        <br>

        Status :
        <select name="status" class="form-control" id="">
            <option value="Baru">Baru</option>
            <option value="Proses">Proses</option>
            <option value="Selesai">Selesai</option>
            <option value="Diambil">Diambil</option>
        </select>
        <br>

        Dibayar :     
        <select name="dibayar" class="form-control" id="">
            <option value="dibayar">Dibayar</option>
            <option value="belum_dibayar">Belum Dibayar</option>
        </select>
        <br>

        <input type="submit" name="simpan" value="Change Member" class="btn btn-primary">
        </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </div>
</body>

</html>
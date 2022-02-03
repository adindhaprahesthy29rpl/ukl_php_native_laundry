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
    <div class="container">
    <h3>Tambah Transaksi</h3>

    <form action="proses_tambah_transaksi.php" method="post">

        Nama Member :
        <select name="id_member" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_member=mysqli_query($conn,"select * from member");
            while($data_member=mysqli_fetch_array($qry_member)){
                echo '<option value="'.$data_member['id_member'].'">'.$data_member['nama'].'</option>';   
            }
            ?>
        </select>

        Tanggal :
        <input type="date" name="tgl" value="" class="form-control">

        Paket (Jenis Laundy) :
        <select name="jenis" class="form-control" id="">
            <?php
                $qry_paket=mysqli_query($conn,"select * from paket");
                while($data_paket=mysqli_fetch_array($qry_paket)){
                    echo '<option value="'.$data_paket['id_paket'].'">'.$data_paket['jenis'].' -> '.$data_paket['harga'].'</option>';   
                }
            ?>
        </select>

        Batas Waktu :
        <input type="date" name="batas_waktu" value="" class="form-control">

        Tanggal Bayar:
        <input type="date" name="tgl_bayar" value="" class="form-control">

        Status :
        <select name="status" class="form-control">
            <option value="1">Baru</option>
            <option value="2">Proses</option>
            <option value="3">Selesai</option>
            <option value="4">Diambil</option>
        </select>

        Dibayar :
        <select name="dibayar" class="form-control">
            <option value="dibayar">Dibayar</option>
            <option value="belum_dibayar">Belum Dibayar</option>
        </select>

        Nama User :
        <select name="id_user" class="form-control">
            <option></option>
            <?php 
            include "koneksi.php";
            $qry_user=mysqli_query($conn,"select * from user");
            while($data_user=mysqli_fetch_array($qry_user)){
                echo '<option value="'.$data_user['id_user'].'">'.$data_user['nama'].'</option>';   
            }
            ?>
        </select>

        Quantity :
        <input type="text" name="qty" value="" class="form-control">
        <br>


        <input type="submit" name="simpan" value="Tambah Transaksi" class="btn btn-primary">

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</div>
</body>
</html>
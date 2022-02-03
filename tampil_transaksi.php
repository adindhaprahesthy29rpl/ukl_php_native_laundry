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
    <h3>Tampil Transaksi</h3>
    <table class="table table-hover table-striped table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>ID TRANSAKSI</th>
                <th>NAMA MEMBER</th>
                <th>TANGGAL</th>
                <th>BATAS WAKTU</th>
                <th>TANGGAL BAYAR</th>
                <th>STATUS</th>
                <th>DIBAYAR</th>
                <th>NAMA USER</th>
                <th>DETAIL TRANSAKSI</th>
                <th>AKSI</th>
                <th>PRINT</th>
            </tr>
        </thead>

        <tbody>

            <?php 
            include "koneksi.php";
            $qry_transaksi=mysqli_query($conn,"select transaksi.*, member.nama as nama_member, user.nama as nama_user  from transaksi JOIN user ON user.id_user = transaksi.id_user JOIN member ON member.id_member = transaksi.id_member");
            $no=0;

            while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
            $no++;?>
            <tr>              
                <td><?=$no?></td>
                <td><?=$data_transaksi['id_transaksi']?></td> 
                <td><?=$data_transaksi['nama_member']?></td> 
                <td><?=$data_transaksi['tgl']?></td>
                <td><?=$data_transaksi['batas_waktu']?></td> 
                <td><?=$data_transaksi['tgl_bayar']?></td> 
                <td><?=$data_transaksi['status']?></td>
                <td><?=$data_transaksi['dibayar']?></td> 
                <td><?=$data_transaksi['nama_user']?></td> 
                <td><a class="btn btn-danger" href="tampil_detail_transaksi.php?id_transaksi=<?php echo $data_transaksi['id_transaksi']; ?>">Lihat Detail</a></td>
                <td><a href="ubah_transaksi.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>" class="btn btn-warning">Ubah</a></td>
                <td><a target="_blank" class="btn btn-success" href="cetak.php?id_transaksi=<?php echo $data_transaksi['id_transaksi']; ?>">Print</a></td>
            </tr>
            <?php 
            }

            ?>

        </tbody>

    </table>

    <a href="tambah_transaksi.php" class="btn btn-warning">Tambah Data</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>
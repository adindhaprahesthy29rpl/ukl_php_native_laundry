<?php
session_start();
if($_SESSION['status_login']!=true){
header('location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"crossorigin="anonymous">
<title></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light"style="box-shadow: 4px 4px 5px -4px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">DINZ LAUNDRY</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>

            <?php
            if($_SESSION['role']=='admin'){
                ?>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tambah_member.php">Tambah Member</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tampil_member.php">Tampil Member</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tambah_user.php">Tambah User</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tampil_user.php">Tampil User</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tambah_paket.php">Tambah Paket</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tampil_paket.php">Tampil Paket</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tambah_transaksi.php">Tambah Transaksi</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tampil_transaksi.php">Tampil Transaksi</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tambah_detail_transaksi.php">Tambah Detail Transaksi</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tampil_detail_transaksi.php">Tampil Detail Transaksi</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="paket.php">Paket</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="transaksi.php">Transaksi</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="transaksi.php">Laporan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tampil_outlet.php">Outlet</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tampil_user.php">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                </li>
                <?php
                }
                ?>

                <?php
            if($_SESSION['role']=='kasir'){
                ?>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="tampil_member.php">Pelanggan</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="transaksi.php">Transaksi</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="transaksi.php">Laporan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                </li>
                <?php
                }
                ?>

                <?php
            if($_SESSION['role']=='owner'){
                ?>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="transaksi.php">Laporan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                </li>
                <?php
                }
                ?>
                
                
        </ul>
    </div>
</div>
</nav>
<div class="container bg-light rounded" style="margin-top:10px">
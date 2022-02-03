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

    <h3>Tambah Member</h3>

    <form action="proses_tambah_member.php" method="post" enctype="multipart/form-data">

        Nama :
        <input type="text" name="nama" value="" class="form-control">

        Alamat :
        <input type="text" name="alamat" value="" class="form-control">

        Jenis Kelamin :
        <select name="jenis_kelamin" class="form-control">
            <option value="1">Laki-Laki</option>
            <option value="2">Perempuan</option>
        </select>

        Tlp :
        <input type="text" name="tlp" value="" class="form-control">
        <br>

        <input type="submit" name="simpan" value="Tambah Member" class="btn btn-primary">

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</div>
</body>

</html>
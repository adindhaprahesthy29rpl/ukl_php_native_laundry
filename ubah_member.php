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
    $qry_get_member=mysqli_query($conn,"select * from member where id_member = '".$_GET['id_member']."'");
    $dt_member=mysqli_fetch_array($qry_get_member);
    ?>

    <h3>Ubah Member</h3>
    <form action="proses_ubah_member.php" method="post" enctype = "multipart/form-data">

        <input type="hidden" name="id_member" value="<?=$dt_member['id_member']?>">

        Nama :
        <input type="text" name="nama" value="<?=$dt_member['nama']?>" class="form-control">

        Alamat :
        <input type="text" name="alamat" value="<?=$dt_member['alamat']?>" class="form-control">

        Jenis Kelamin :
        <select name="jenis_kelamin" value="<?=$dt_member['jenis_kelamin']?>" class="form-control">
            <option value="1">laki-Laki</option>
            <option value="2">Perempuan</option>
        </select>

        Telepon :
        <input type="text" name="tlp" value="<?=$dt_member['tlp']?>" class="form-control">

        <input type="submit" name="simpan" value="Ubah Member" class="btn btn-primary">

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>
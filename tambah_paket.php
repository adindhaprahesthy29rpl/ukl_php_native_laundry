<?php
include ("admin.php");
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
    <h3>Tambah Paket</h3>

    <form action="proses_tambah_paket.php" method="post" enctype="multipart/form-data">

        Jenis Paket :
        <select name="jenis" class="form-control">
            <option value="1">Kiloan</option>
            <option value="2">Selimut</option>
            <option value="3">Bed Cover</option>
            <option value="4">Kaos</option>
        </select>

        Deskripsi :
        <br>
        <textarea name="deskripsi" cols = 147 class = "from-control"></textarea>
        </br>

        Harga :
        <input type="number" name="harga" value="" class="form-control">

        <br>
        <input type="submit" name="simpan" value="Tambah Paket" class="btn btn-primary">


    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</div>
</body>

</html>

<?php 
    
    include "header_admin.php";
    include "koneksi.php";
    $qry_detail_paket=mysqli_query($conn,"select * from paket where id_paket = '".$_GET['id_paket']."'");
    $dt_paket=mysqli_fetch_array($qry_detail_paket);
    $harga=$dt_paket['harga'];
    $harga2=number_format($harga, 2);
?>

<h2>Pemesanan Paket</h2>
<div class="row">
    <div class="col-md-4">
        <img src="foto_paket/<?=$dt_paket['foto_paket']?>" class="card-img-top">
    </div>

    <div class="col-md-8">
        <form action="masukkan_keranjang.php?id_paket=<?=$dt_paket['id_paket']?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Jenis Paket</td><td><?=$dt_paket['jenis']?></td>
                    </tr>

                    <tr>
                        <td>Deskripsi</td><td><?=$dt_paket['deskripsi']?></td>
                    </tr>

                    <tr>
                        <td>Harga</td><td><?php echo("Rp. " .$harga2);?></td>
                    </tr>

                    <tr>
                        <td>Jumlah Pemesanan</td><td><input type="number" name="jumlah_pesan" value="1"></td>
                    </tr>

                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="PESAN"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>

<?php 

    include "footer_admin.php";

?>



<?php 
    include "header_admin.php";
?>

<h2>Daftar Paket</h2>
<div class="row">
    <?php 
    include "koneksi.php";
    $qry_paket=mysqli_query($conn,"select * from paket");
    while($dt_paket=mysqli_fetch_array($qry_paket)){
        ?>
        <div class="col-md-3">
            <div class="card" >
              <img src="foto_paket/<?=$dt_paket['foto_paket']?>" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_paket['jenis']?></h5>
                <p class="card-text"><?=substr($dt_paket['deskripsi'], 0,100)?></p>
                <a href="pesan.php?id_paket=<?=$dt_paket['id_paket']?>" class="btn btn-primary">Pesan</a>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<?php 
    include "footer_admin.php";
?>
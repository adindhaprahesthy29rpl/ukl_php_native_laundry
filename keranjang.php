<?php 
    include "header_admin.php";
?>

<center>
<br></br>
<h2>Daftar Paket di Keranjang</h2>
<br></br>
</center>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>NO</th>
            <th>Nama Paket</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php
        session_start();
        foreach ($_SESSION['cart'] as $key_paket => $val_paket): 
            $subtotal=$val_paket['subtotal'];
            $subtotal2=number_format($subtotal, 2); ?>
            <tr>
                <td><?=($key_paket+1)?></td>
                <td><?=$val_paket['jenis']?></td>
                <td><?=$val_paket['qty']?></td>
                <td><?php echo ("Rp. ".$subtotal2);?></td>
                <td><a href="hapus_cart.php?id=<?=$key_paket?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<a href="checkout.php" class="btn btn-primary">Check Out</a>
<br></br>

<?php 
    include "footer_admin.php";
?>
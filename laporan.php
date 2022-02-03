

<h2>Laporan Laundry</h2>

<table class="table table-hover table-striped">

    <thead>
        <th>NO</th>
        <th>Tanggal Transaksi</th>
        <th>Nama Paket</th>
        <th>Total</th>
        <th>Status</th>
    </thead>

    <tbody>
        <?php 
        include "koneksi.php";
        session_start();
        //$_SESSION['id_member'] = $dt[id_member];

        $qry_laporan=mysqli_query($conn,"select * from transaksi where id_user='".$_SESSION['id_user']."' order by id_transaksi desc");
        $no=0;

        while($dt_laporan=mysqli_fetch_array($qry_laporan)){
            $no++;
            //menampilkan produk yang dibeli

            $paket_dibeli="<ol>";
            $total=0;
            $qry_paket=mysqli_query($conn,"select * from  detail_transaksi join paket on paket.id_paket=detail_transaksi.id_paket where id_transaksi = '".$dt_laporan['id_transaksi']."'");

            while($dt_paket=mysqli_fetch_array($qry_paket)){
                $paket_dibeli.="<li>".$dt_paket['jenis']."</li>";
                $total += $dt_paket['subtotal'];
            }

            $paket_dibeli.="</ol>";
            $total2 = number_format($total, 2);
        ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$dt_laporan['tgl']?></td>
                <td><?=$paket_dibeli?></td>
                <td><?php echo("Rp. ".$total2); ?></td>
                <td><?php echo("Diproses"); ?></td>
            </tr>

        <?php
        }
        ?>
    </tbody>
</table>

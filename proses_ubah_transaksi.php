<?php

if($_POST){
    $tgl_bayar=$_POST['tgl_bayar'];
    $status=$_POST['status'];
    $dibayar=$_POST['dibayar'];
    $id_transaksi=$_POST['id_transaksi'];

    if(empty($status)) {
        echo "<script>alert('Status cannot be empty');location.href='ubah_transaksi.php';</script>";

    } elseif(empty($dibayar)){
        echo "<script>alert('Paid cannot be empty');location.href='ubah_transaksi.php';</script>";

    } else {

        include "koneksi.php";

            if(empty($status)){
            $update=mysqli_query($conn,"update transaksi set tgl_bayar='".$tgl_bayar."', status='".$status."', dibayar='".$dibayar."', id_transaksi='".$id_transaksi."' where id_transaksi = '".$id_transaksi."' ") or die(mysqli_error($conn));

            if($update){
                echo "<script>alert('Success update transaksi');location.href='tampil_transaksi.php';</script>";

            } else {
                echo "<script>alert('Fail update transaksi');location.href='ubah_transaksi.php?id_transaksi=".$id_transaksi."';</script>";

            }

            } else {
            $update=mysqli_query($conn,"update transaksi set tgl_bayar='".$tgl_bayar."', status='".$status."', dibayar='".$dibayar."', id_transaksi='".$id_transaksi."' where id_transaksi = '".$id_transaksi."' ") or die(mysqli_error($conn));

            if($update){
                echo "<script>alert('Success update transaction');location.href='tampil_transaksi.php';</script>";

            } else {
                echo "<script>alert('Fail update transaction');location.href='ubah_transaksi.php?id_transaksi=".$id_transaksi."';</script>";

            }
        }
    }
}
?>
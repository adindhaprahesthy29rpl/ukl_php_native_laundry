<?php

if($_POST){
    $id_member=$_POST['id_member'];
    $tgl=$_POST['tgl'];
    $batas_waktu=$_POST['batas_waktu'];
    $tgl_bayar=$_POST['tgl_bayar'];
    $status=$_POST['status'];
    $dibayar=$_POST['dibayar'];
    $id_user=$_POST['id_user'];
    $jenis=$_POST['jenis'];
    $qty=$_POST['qty'];


    if(empty($id_member)){
        echo "<script>alert('id member tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($tgl)){
        echo "<script>alert('tgl tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($batas_waktu)){
        echo "<script>alert('batas waktu tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($tgl_bayar)){
        echo "<script>alert('tanggal bayar tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($status)){
        echo "<script>alert('status tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($dibayar)){
        echo "<script>alert('dibayar tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } elseif(empty($id_user)){
        echo "<script>alert('id_user tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
    } else {
        include "koneksi.php";

        $abc=mysqli_query($conn,"INSERT INTO `transaksi` (id_member, tgl, batas_waktu, tgl_bayar, status, dibayar, id_user) VALUES ('".$id_member."','".$tgl."','".$batas_waktu."','".$tgl_bayar."','".$status."','".$dibayar."','".$id_user."')");

       

        if($abc){

            $latest_id = mysqli_insert_id($conn);
            $insert=mysqli_query($conn,"INSERT INTO `detail_transaksi` (id_transaksi, id_paket, qty) VALUES ('".$latest_id."','".$jenis."','".$qty."')");
            if($insert){
                echo "<script>alert('Sukses menambahkan transaksi');location.href='tambah_transaksi.php';</script>";

            }else{
                echo "<script>alert('Gagal menambahkan transaksi');location.href='tambah_transaksi.php';</script>";
            }

        } else {

            echo "<script>alert('Gagal menambahkan transaksi');location.href='tambah_transaksi.php';</script>";

        }

    }

}

?>
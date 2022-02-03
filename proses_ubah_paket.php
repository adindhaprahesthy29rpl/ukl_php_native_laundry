<?php

if($_POST){
    $id_paket=$_POST['id_paket'];
    $jenis=$_POST['jenis'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];

    if(empty($jenis)){
        echo "<script>alert('jenis tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } elseif(empty($deskripsi)){
        echo "<script>alert('deskripsi tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } elseif(empty($harga)){
        echo "<script>alert('harga tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } else {

        include "koneksi.php";
            $update=mysqli_query($conn,"update paket set jenis='".$jenis."',deskripsi='".$deskripsi."', harga='".$harga."'where id_paket = '".$id_paket."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update paket');location.href='tampil_paket.php';</script>";
            } else {
                echo "<script>alert('Gagal update paket');location.href='ubah_paket.php?id_paket".$id_paket."';</script>";    
            }
        }
    }
?>
<?php 
session_start();
if($_SESSION['role']=="admin"){
    include ("admin.php"); 
}elseif ($_SESSION['role']=="kasir"){
include ("kasir.php");
}

?>

<div class="container-fluid px-4">
                        <h1 class="mt-4">Selamat Datang di Dindz Laundry</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dindz Laundry adalah laundry yang terjamin akan mutu dan kualitasnya.</li>
                        </ol>

<?php

    include "footer.php";

?>
<?php

//tangkap data nim sebagai parameter delete pada url melalaui method GET
$nim = $_GET['nim'];

//tambakan koneksi
include "koneksi.php";

//buat query delete data pada tabel mahasiswa
$qry = "delete from mahasiswa where nim = '$nim'";
$exec = mysqli_query($con,$qry);

if($exec){
    echo "<script> alert('Data berhasil dihapus'); window.location='index.php';</script>";
}else{
    echo "<script> alert('Data gagal dihapus'); window.location='index.php';</script>";   
}


?>
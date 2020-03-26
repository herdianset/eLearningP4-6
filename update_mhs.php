<?php

//menangkap hasil submit pada element form melalui method POST
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];

//menambahkan koneksi database dengan fungsi include script pada halaman koneksi.php
include "koneksi.php";

//membuat query update pada tabel mahasiswa 
$query = "update mahasiswa set nama =  '$nama', id_jurusan = '$jurusan', jenis_kelamin = '$jenis_kelamin', 
alamat = '$alamat', no_hp = '$no_hp', email = '$email' where nim = '$nim'";

//mengeksekusi query insert
$exec = mysqli_query($con,$query);

//membuat kondisi jika data berhasil di update makan muncul alert dan redirect ke halaman index
if($exec){
    echo "<script>alert('data berhasil diupdate'); window.location='index.php'</script>";
}else{
    echo "<script>alert('data gagal diupdate'); window.location='index.php'</script>";
}

?>
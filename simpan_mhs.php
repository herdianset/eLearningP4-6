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

//membuat query insert pada tabel mahasiswa 
$query = "insert into mahasiswa values ('$nim','$nama','$jurusan','$jenis_kelamin','$alamat','$no_hp','$email')";

//mengeksekusi query insert
$exec = mysqli_query($con,$query);

//membuat kondisi jika data berhasil di simpan makan muncul alert dan redirect ke halaman index
if($exec){
    echo "<script>alert('data berhasil disimpan'); window.location='index.php'</script>";
}else{
    echo "<script>alert('data gagal disimpan'); window.location='biodata_mahasiswa.php'</script>";
}

?>
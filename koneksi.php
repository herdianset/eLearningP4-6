<?php
    //membuat koneksi ke database dengan parameter : host, username, password, nama_database
    $con = mysqli_connect("localhost","root","","dbpendidikan");

    if(mysqli_connect_error()){
        echo "Terjadi Kesalahan : " . mysqli_connect_error();
    }

?>
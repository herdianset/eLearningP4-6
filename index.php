<html>
    <head>
        <title>Data Mahasiswa</title>
    </head>
    <body>
    <div align = "center">
        <h2>Formulir Input Data Mahasiswa</h2>
    <a href="biodata_mahasiswa.php">(+) Tambah Data</a>
        <table border = "1">
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No. HP</th>
                <th>Email</th>
                <th>Pilihan</th>
            </tr>
            <?php
                //menambahkan koneksi ke database
                include "koneksi.php";

                //membuat query select data pada tabel mahasiswa
                $qry = "select * from mahasiswa a inner join jurusan b on a.id_jurusan = b.id_jurusan";
                //mengeksekusi query select
                $exec = mysqli_query($con,$qry);
                //menghandle hasil select data; menyimpan object dalam bentuk array pada sembuah variable
                //kemudian disajikan pada kolom dalam tabel melalui sejumlah baris pada data dengan teknik looping(while)
                while($data = mysqli_fetch_array($exec)){
                ?>
            <tr>
                <td><?php echo $data['nim'] ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['jurusan'] ?></td>
                <td><?php echo $data['jenis_kelamin'] ?></td>
                <td><?php echo $data['alamat'] ?></td>
                <td><?php echo $data['no_hp'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td>
                  <a href="edit_biodata.php?nim=<?php echo $data['nim'] ?>"><button>Edit</button></a> 
                  | 
                  <a href="delete_mhs.php?nim=<?php echo $data['nim'] ?>"><button>Delete</button></a>
                </td>
            </tr>
                <?php } ?>
        </table>
        </div>
    </body>
</html>
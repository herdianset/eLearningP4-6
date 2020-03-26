<html>
    <head>
        <title></title>
    </head>
    <body>
            <fieldset>
            <legend>Form Input Biodata Mahasiswa</legend>
            <label><b>Lengkapi Biodata Dengan Benar</b></label>
            <form name="Input_mahasiswa" method="POST" action="simpan_mhs.php">
                <table>
                     <tr>
                        <td>NIM (Nomor Induk Mahasiswa)</td>
                        <td>:</td>
                        <td><input type="text" name="nim" required></td>
                    </tr>
                    <tr>
                        <td>Nama Mahasiswa</td>
                        <td>:</td>
                        <td><input type="text" name="nama" required></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>
                            <select name="jurusan">
                            <?php
                                //menambahkan koneksi pada database
                                include "koneksi.php";
                                //membuat query select pada tabel jurusan
                                 $jurusan = mysqli_query($con,"select * from jurusan");
                                 while($data_jurusan = mysqli_fetch_assoc($jurusan)){
                                ?>
                                <option value="<?php echo $data_jurusan['id_jurusan'] ?>"><?php echo $data_jurusan['jurusan'] ?></option>
                                 <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki
                        <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" required></td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <td>:</td>
                        <td><input type="text" name="no_hp" required></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="email" name="email" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="proses" value="Simpan"> <a href="index.php"><button type="button">kembali</button></a>
                        </td>
                    </tr>
                </table>
            </form>
            </fieldset>
    </body>
</html>
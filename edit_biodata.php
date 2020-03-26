<?php
    //membuka koneksi ke database
    include "koneksi.php";
    //ambil data yang mau di rubah pada tabel mahasiswa dengan parameter select berdasarkan nim
    
    //ambil data nim yang dikirim melalui URL dengan method GET
    $nim = $_GET['nim'];
    //buat query select pada tabel mahasiswa
    $qry = "select * from mahasiswa where nim = '$nim'";
    $exec = mysqli_query($con,$qry);
    $data = mysqli_fetch_assoc($exec);
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
            <fieldset>
            <legend>Form Input Biodata Mahasiswa</legend>
            <label><b>Lengkapi Biodata Dengan Benar</b></label>
            <form name="Input_mahasiswa" method="POST" action="update_mhs.php">
                <table>
                     <tr>
                        <td>NIM (Nomor Induk Mahasiswa)</td>
                        <td>:</td>
                        <td><input type="text" name="nim" value="<?php echo $data['nim']; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Nama Mahasiswa</td>
                        <td>:</td>
                        <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                        <td>
                            <select name="jurusan">
                                <?php
                                 $jurusan = mysqli_query($con,"select * from jurusan");
                                 while($data_jurusan = mysqli_fetch_assoc($jurusan)){
                                 if($data['id_jurusan'] == $data_jurusan['id_jurusan']) {
                                 ?>
                                <option value="<?php echo $data_jurusan['id_jurusan'] ?>" selected><?php echo $data_jurusan['jurusan'] ?></option>
                                 <?php } else { ?>
                                <option value="<?php echo $data_jurusan['id_jurusan'] ?>"><?php echo $data_jurusan['jurusan'] ?></option>
                                 <?php } } ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <?php if($data['jenis_kelamin'] == "laki-laki"){ ?>
                            <input type="radio" name="jenis_kelamin" value="laki-laki" checked>Laki-Laki
                            <input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan
                            <?php } else { ?>
                            <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki
                            <input type="radio" name="jenis_kelamin" value="perempuan" checked>Perempuan
                            <?php } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <td>:</td>
                        <td><input type="text" name="no_hp" value="<?php echo $data['no_hp']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="email" name="email" value="<?php echo $data['email']; ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="proses" value="Simpan"> <a href="index.php"><button type="button">kembali</button></a></td>
                    </tr>
                </table>
            </form>
            </fieldset>
    </body>
</html>
<!DOCTYPE html>
<html>
<style>
    html {
        background-color: #04fa24;
    }
</style>
    <head>
        <title> Form Perpustakaan Madiun </title>
    </head>
    <body>
        <hr>
        <h2 align="center">Data Form Perpustakaan Madiun</h2>
        <?php
        if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "input"){
        echo "Data berhasil di input.";
        }else if($pesan == "update"){
        echo "Data berhasil di update.";
        }else if($pesan == "hapus"){
        echo "Data berhasil di hapus."; 
        }
        }
    ?>
    <hr>
    <br/>
    <a class="tombol" href="input.php">+ Tambah Data Baru</a>
        <table border="1" align="center" width="100%">
            <tr bgcolor="blue">
                <th bgcolor="blue">No_Peminjaman</th>
                <th bgcolor="purple">Nama</th>
                <th bgcolor="yellow">Alamat</th>
                <th bgcolor="green">Status</th>
                <th bgcolor="orange">Email</th>
                <th bgcolor="candy">Tanggal</th>
            </tr>
            <tr>
                <?php
                    include "koneksi.php";
                    $query = mysqli_query($koneksi, "Select * From perpusmadiun");
                    while ($data = mysqli_fetch_array($query)) { 
                ?>
                <td><?php echo $data['No_Peminjaman']; ?></td>
                <td><?php echo $data['Nama']; ?></td>
                <td><?php echo $data['Alamat']; ?></td>
                <td><?php echo $data['Status']; ?></td>
                <td><?php echo $data['Email']; ?></td>
                <td><?php echo $data['Tanggal']; ?></td>
            </tr>
<?php
    }
?>
    </table>
    </body>
<html>
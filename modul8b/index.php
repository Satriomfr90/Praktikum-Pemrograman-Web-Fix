<!DOCTYPE html>
<html>
<style>
    html {
        background-color: #f59d07;
    }
</style>
    <head>
        <title> Form Service Motor</title>
    </head>
    <body>
        <hr>
        <h2 align="center">Data Service Motor</h2>
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
            <tr bgcolor="red">
                <th bgcolor="blue">No_Plat</th>
                <th bgcolor="purple">Id_Pelanggan</th>
                <th bgcolor="yellow">Nama</th>
                <th bgcolor="green">Alamat</th>
                <th bgcolor="orange">Email</th>
                <th bgcolor="brown">Keluhan</th>
                <th bgcolor="candy">Total Pembayaran</th>
            </tr>
            <tr>
                <?php
                    include "koneksi.php";
                    $query = mysqli_query($koneksi, "Select * From servicemotor");
                    while ($data = mysqli_fetch_array($query)) { 
                ?>
                <td><?php echo $data['No_Plat']; ?></td>
                <td><?php echo $data['Id_Pelanggan']; ?></td>
                <td><?php echo $data['Nama']; ?></td>
                <td><?php echo $data['Alamat']; ?></td>
                <td><?php echo $data['Email']; ?></td>
                <td><?php echo $data['Keluhan']; ?></td>
                <td><?php echo $data['Total Pembayaran']; ?></td>
            </tr>
<?php
    }
?>
    </table>
    </body>
<html>
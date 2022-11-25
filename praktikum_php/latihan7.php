<!DOCTYPE html>
<html>
    <head>
        <title> LATIHAN 7 PEMROGRAMAN WEB</title>
    </head>
    <body>
        <form method="get">
    <table>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama"/></td>
    </tr>
    <tr>
        <td>NIM</td>
        <td>:</td>
        <td><input type="text" name="nim"/></td>
    </tr>
        <tr align="center">
        <td colspan="3"><input type="submit" name="submit" value="simpan"/>&nbsp;
        <input type="Reset" name="Reset" value="Reset"/></td>
    </tr>
    </table>
    <?php 
        if (isset($_GET['submit'])) { //pengesekan jika direases tambal submit, maka keznilai true  
        $nama = $_GET['nama']; //xaziakel untuk mengambil nilai dazi URL NAMA
        $nim = $_GET['nim']; //xaziakel untuk mengambil nilai dazi URL nim
        echo "<br/><br/> INI OUTPUT SESUAI INPUTAN DARI FORM DIATAS <br/>";
        echo "Nama: ".$nama;
        echo "<br/>Nim: ".$nim; }
    ?>
    </form>
    </body>
</html>
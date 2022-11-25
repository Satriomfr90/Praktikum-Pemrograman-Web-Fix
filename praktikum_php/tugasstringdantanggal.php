<!DOCTYPE html>
<html>
    <head>
        <title>Tugas String dan Tanggal</title>
    </head>
    <body>
    <form>
    Masukkan Nama, Email dan Password <br>
    Default Nama = belajar, Email = test@gmail.com dan Password =
    madiun <br>
    Isian data :<br>
    Nama :<INPUT TYPE=TEXT NAME=password><br>
    Email :<INPUT TYPE=TEXT NAME=email><br>
    Password :<INPUT TYPE=PASSWORD NAME=password><br>
    <INPUT TYPE=SUBMIT VALUE="Cek"><br>
    </form>
    
    <?php
    if (isset($email))
    if (empty($email))
    print("Harap mengisi email <br>\n");
    else
    {
        //cek email
        //if (ereg("^.+@.+\\..+$", $email))
    if (ereg("test@gmail.com", $email))
    print("Alamat email $email valid<br>\n");
    else
    print("Alamat email $email tidak valid<br>\n");
    }
    if (isset($password))
    { 
        $nama = "belajar";
        $pass_valid = crypt("madiun", $nama);
        $enkripsi = crypt($password, $nama);
        if ($pass_valid == $enkripsi)
        print("Password valid");
        else
        print("Password salah");
    }
    ?>
    </body>
</html>
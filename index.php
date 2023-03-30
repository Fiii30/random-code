<?php 
require('koneksi/koneksi.php');
include('proses/proseslogin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index_style.css">
    <title>Login</title>
</head>
<body>
    <div class="formlogin">
        <div class="formtitle">
            <h4>Login Member</h4>
        </div>
        <form action="" method="POST">
            <div class="forminput">
                <label for="email" class="formlabel">Email</label>
                <input type="email" name="email" id="email" placeholder="Email"
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,50}$" title="Tidak bisa memasukkan spasi dan simbol!">
            </div>
            <div class="forminput">
                <label for="password" class="formlabel">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" 
                pattern="(?=.*\d)(?=.*[a-zA-Z])[a-zA-Z0-9]{5,50}" title="Harus memasukkan minimal satu angka dan huruf!">
            </div>
            <div class="formbutton">
                <button type="submit" class="btnsubmit" name="btnsubmit">Login</button>
            </div>
        </form>
        <div class="formlink">
            <pre>Klik <a href="register.php">Disini</a> Jika Belum Memiliki Akun</pre>
        </div>
    </div>
</body>
</html>
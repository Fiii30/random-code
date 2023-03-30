<?php

if(isset($_POST['btnsubmit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($username) || empty($email) || empty($password)){
        echo '<script>alert("Register Gagal! Ada masalah pada inputan.")</script>';
    }else{
        $mysql_register = "INSERT INTO user(username, email, password) 
        VALUE('$username', '$email', MD5('$password'))";
        if(!mysqli_query($koneksi, $mysql_register)){
            echo "Gagal Menghubungkan ".mysqli_error($koneksi);
        }else{
            echo '<script>alert("Registrasi Berhasil!"); 
            window.location.href="index.php";</script>';
            exit;
        }
    }
    
}

?>
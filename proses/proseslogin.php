<?php

session_start();

if(isset($_POST['btnsubmit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql_email = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email'");

    if(mysqli_num_rows($sql_email) == 1){
        
        ($cek = mysqli_fetch_assoc($sql_email));
        
        if($cek['password'] == md5($password)){
            $_SESSION['username'] = $cek['username'];
        }
        header("location: body/landing.php");
        exit;
    }
}
?>
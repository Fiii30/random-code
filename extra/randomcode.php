<?php

function generateRandomValue($length){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomValue = 'W';
    for ($i = 0; $i < $length; $i++) {
        $randomValue .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomValue;
}

$randomValue = generateRandomValue(6); // Ubah angka 6 menjadi jumlah karakter yang ingin dihasilkan

// Generate nilai acak
if(isset($_POST['btnrun'])){
    $randomcode = $randomValue;
}
    
if(isset($_POST['btnsubmit'])){
    $randcode = $_POST['randcode'];
    $tanggal = $_POST['tanggal'];

    $mysql_code = "INSERT INTO code(code, tanggal) VALUES ('$randcode', '$tanggal')";
    if(!mysqli_query($koneksi, $mysql_code)){
        echo "Gagal menyimpan data: ".mysqli_error($koneksi);
    }else{
        echo '<script>alert("Berhasil diSimpan!"); 
        window.location.href="landing.php";</script>';
        exit;
    }
}

?>
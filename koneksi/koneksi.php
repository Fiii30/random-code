<?php
$koneksi = mysqli_connect("localhost","root","","web_login");

if (!$koneksi){
  die("Error koneksi: " . mysqli_connect_errno());
}
?> 
<?php

$host = 'localhost'; 
$dbname = 'tes_oshs'; 
$username = 'root'; 
$password = ''; 


$koneksi = mysqli_connect($host, $username, $password, $dbname);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

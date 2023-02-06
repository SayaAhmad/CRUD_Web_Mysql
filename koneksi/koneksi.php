<?php
// Konfigurasi Database
$host = "localhost";
$username = "root";
$password = "";
$database = "perpustakaan_130";
$koneksi = mysqli_connect($host, $username, $password, $database);

if($koneksi){
  echo "";
}else{
  echo "Database Error";
}
?>
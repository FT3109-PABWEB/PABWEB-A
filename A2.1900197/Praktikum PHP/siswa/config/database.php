<?php // tag pembuka sytax PHP
// set default timezone
date_default_timezone_set("ASIA/JAKARTA");

// deklarasi parameter koneksi database
$server = "localhost";  // server databse, default "localhost" atau "127.0.0.1"
$username = "root"; // servr databse, default "root"
$password = ""; //password database, default kosong
$database = "db_sekolah"; // memilih database yang akan digunakan

//koneksi database
$db = mysqli_connect($server, $username, $password, $database); 

//cek koneksi
if(!$db){
    // cek koneksi gagal, tampilkan pesan gagal
    die('Koneksi Database Gagal : ' .mysqli_connect_error());
}
?>              <!-- tag penutup syntax PHP -->
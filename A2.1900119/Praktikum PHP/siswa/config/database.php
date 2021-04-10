<?php       // tag pembuka syntax php

date_default_timezone_set("ASIA/JAKARTA"); // set default timezone

// deklarasi parameter koneksi database

$server    = "localhost";   // server database, default "localhost" atau "127.0.0.1"
$usename    = "root";  // username database, default "root"
$password   = ""; // password database, default kosong
$database   = "db_sekolah"; // memilih database yang akan digunakan

// koneksi database 
$db = mysqli_connect($server, $usename, $password, $database);

// cek koneksi
if (!$db) {
    // cek koneksi gagal, tampilkan pesan gagal
    die('Koneksi Database Gagal : '.mysqli_connect_error());
    }
?>
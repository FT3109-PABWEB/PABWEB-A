<?php       

date_default_timezone_set("ASIA/JAKARTA"); 


$server    = "localhost";   
$usename    = "root";  
$password   = ""; 
$database   = "db_sekolah"; 


$db = mysqli_connect($server, $usename, $password, $database);


if (!$db) {
    
    die('Koneksi Database Gagal : '.mysqli_connect_error());
    }
?>
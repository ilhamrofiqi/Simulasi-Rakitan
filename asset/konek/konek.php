<?php
$servername = 'localhost';
$username = 'u5495388_oneitdb';
$password = '$6dvz(bV~By,';
$database = 'u5495388_simulasi';

$connect = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
    if(!$connect) {
        die('Koneksi Gagal:' .mysql_error());
    }
?>
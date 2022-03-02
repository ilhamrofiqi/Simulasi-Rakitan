<?php
$servername = 'localhost';
$username = '';
$password = '';
$database = '';

$connect = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
    if(!$connect) {
        die('Koneksi Gagal:' .mysql_error());
    }
?>

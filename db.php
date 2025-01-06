<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'gtw';

$config = mysqli_connect($host, $user, $password, $database);

if (!$config) {
    die('Koneksi database gagal: ' . mysqli_connect_error());
}
?>
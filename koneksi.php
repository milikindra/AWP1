<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "awp1_db1";

$koneksi = mysql_connect($host, $user, $pass) or die("koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("tidak ada database yang dipilih!");
?>
<?php
$hostname="localhost";
$username="root";
$password=" ";
$database="db_transaksi";
$koneksi= mysqli_connect($hostname,$username,$password, $database) or die ("koneksi ke MYSQL gagal :".mysqli_connect_error()                                 );
?>
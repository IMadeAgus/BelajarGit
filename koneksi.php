<?php
<<<<<<< HEAD
$hostname="localhost";
$username="root";
$password=" ";
$database="db_transaksi";
$koneksi= mysqli_connect($hostname,$username,$password, $database) or die ("koneksi ke MYSQL gagal :".mysqli_connect_error()                                 );
=======
    $konek=mysqli_connect('localhost','root','','dbsewamobil');
    if (!$konek)
    {
        die("Koneksi Gagal").mysqli_connect_error();
    }
>>>>>>> e7474f01e427cc0df080591c54f401180cf0e241
?>
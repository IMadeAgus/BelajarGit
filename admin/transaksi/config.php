<?php
    $koneksi=mysqli_connect('localhost','root','','dbtransaksi');
    if (!$koneksi)
    {
        die("Koneksi Gagal").mysqli_connect_error();
    }
?>
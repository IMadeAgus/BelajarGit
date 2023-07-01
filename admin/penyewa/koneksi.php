<?php
$konek = mysqli_connect('localhost', 'root', '', 'dbsewamobil');
if (!$konek) {
  die("Koneksi Gagal") . mysqli_connect_error();
}
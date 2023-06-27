<?php
$konek = mysqli_connect('localhost', 'root', '', 'dbmobil');
if (!$konek) {
  die("Koneksi Gagal") . mysqli_connect_error();
}

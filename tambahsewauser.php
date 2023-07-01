<?php
include "koneksi.php";
$mobil_id = $_POST['id'];
$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$no_ktp = $_POST['no_ktp'];
$tanggal_peminjaman = $_POST['tanggal_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];
$lama_peminjaman = $_POST['lama_peminjaman'];

$sql = "insert into tb_penyewa values('','$mobil_id','$nama','$no_hp','$no_ktp','$tanggal_peminjaman','$tanggal_pengembalian','$lama_peminjaman')";

$query = mysqli_query($konek, $sql);
if ($query) {
  header("Location:tampilsewa.php");
} else {
  echo "Data Gagal disimpan";
}
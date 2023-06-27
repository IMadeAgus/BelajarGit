<?php
include "koneksi.php";

$nama = $_POST['nama'];
$no_hp = $_POST['no_hp'];
$no_ktp = $_POST['no_ktp'];
$tgl_peminjaman = $_POST['tgl_peminjaman'];
$tgl_pengembalian = $_POST['tgl_pengembalian'];
$lama_peminjaman = $_POST['lama_peminjaman'];

$sql = "insert into tb_penyewa values('','$nama','$no_hp','$no_ktp','$tgl_peminjaman','$tgl_pengembalian','$lama_peminjaman')";

$query = mysqli_query($konek, $sql);
if ($query) {
  echo "Data Berhasil Disimpan";
} else {
  echo "Data Gagal disimpan";
}

<?php
include 'koneksi.php';

if (isset($_POST['ubah'])) {

  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $no_hp = $_POST['no_hp'];
  $no_ktp = $_POST['no_ktp'];
  $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
  $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
  $lama_peminjaman = $_POST['lama_peminjaman'];
  $sql = "UPDATE tb_penyewa
                SET nama='$nama', 
                    no_hp='$no_hp', 
                    no_ktp='$no_ktp',
                    tanggal_peminjaman='$tanggal_peminjaman', 
                    tanggal_pengembalian='$tanggal_pengembalian', 
                    lama_peminjaman='$lama_peminjaman'
                   
                WHERE id='$id'";
  $query = mysqli_query($konek, $sql);

  if ($query) {
    header("location:orderlist.php?pesan=update");
  } else {
    die("Perubahan Gagal Disimpan");
  }
}
if (isset($_POST['batal'])) {
  header("location:orderlist.php");
} else {
  die("Gagal terhubung dengan database!");
}
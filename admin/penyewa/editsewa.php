<?php
include 'koneksi.php';

if (isset($_POST['ubah'])) {

  $id = $_POST['id_sewa'];
  $nama = $_POST['nama'];
  $no_hp = $_POST['no_hp'];
  $no_ktp = $_POST['no_ktp'];
  $tgl_peminjaman = $_POST['tgl_peminjaman'];
  $tgl_pengembalian = $_POST['tgl_pengembalian'];
  $lama_peminjaman = $_POST['lama_peminjaman'];
  $sql = "UPDATE tb_penyewa
                SET nama='$nama', 
                    no_hp='$no_hp', 
                    no_ktp='$no_ktp',
                    tgl_peminjaman='$tgl_peminjaman', 
                    tgl_pengembalian='$tgl_pengembalian', 
                    lama_peminjaman='$lama_peminjaman', 
                   
                WHERE id_sewa='$id'";
  $query = mysqli_query($konek, $sql);

  if ($query) {
    header("location:tampilsewa.php?pesan=update");
  } else {
    die("Perubahan Gagal Disimpan");
  }
}
if (isset($_POST['batal'])) {
  header("location:tampilsewa.php");
} else {
  die("Gagal terhubung dengan database!");
}

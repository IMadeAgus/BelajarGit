<?php include "koneksi.php";
$penyewa_id=$_POST['id'];
$TotalHarga=$_POST['TotalHarga'];
$TotalPembayaran=$_POST['TotalPembayaran'];
$sql = "insert into tbpengembalian values('','$penyewa_id','$TotalHarga','$TotalPembayaran')";
$query = mysqli_query($konek, $sql);
if ($query) {
  header("Location:orderlist.php");
} else {
  echo "Data Gagal disimpan";
}

?>
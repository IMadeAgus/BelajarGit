<?php 
include 'koneksi.php';
 
$KodeBuku = $_GET['KodeBuku'];

mysqli_query($konek,"delete from tbbuku where KodeBuku=$KodeBuku");
header("location:index.php");
?>
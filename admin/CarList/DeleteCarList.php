<?php 
include '../../Koneksi/koneksi.php';
 
$id = $_GET['id'];

mysqli_query($konek,"delete from tbmobil where id=$id");
header("location:ShowCarList.php");
?>
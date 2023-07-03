<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($konek, "delete from tb_penyewa where id = $id");
header("location: orderlist.php");

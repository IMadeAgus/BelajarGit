<?php
include 'koneksi.php';

$id_penyewa = $_GET['id_penyewa'];
mysqli_query($konek, "delete from tb_penyewa where id_penyewa = $id_penyewa");
header("location: formsewa.php");

<?php
include 'koneksi.php';

$id = $_GET['id_sewa'];
mysqli_query($konek, "delete from tb_penyewa where id_sewa = $id");
header("location: formsewa.php");

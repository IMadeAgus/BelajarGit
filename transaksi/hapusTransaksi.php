<?php
include 'config.php';
if( isset($_GET['id']) ){
    $id = $_GET['id'];
    $sql = "DELETE FROM tbtransaksi WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);
    
    if( $query ){
        header('Location: list-buku.php');
    } else {
        die("Gagal Dihapus");
    }
} else {
    die("Gagal terhubung dengan database!");
}
?>
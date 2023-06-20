<?php
// include 'koneksi.php';
// if( isset($_GET['id']) ){
//     $id = $_GET['id'];
//     $sql = "DELETE FROM tbmobil WHERE id=$id";
//     $query = mysqli_query($db, $sql);
    
//     if( $query ){
//         header('Location: ShowCarList.php');
//     } else {
//         die("Gagal Dihapus");
//     }
// } else {
//     die("Gagal terhubung dengan database!");
// }
?>
<?php 
include 'koneksi.php';
 
$id = $_GET['id'];

mysqli_query($konek,"delete from tbmobil where id=$id");
header("location:ShowCarList.php");
?>
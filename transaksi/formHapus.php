<?php
include 'config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM tbtransaksi WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if($query){
        header("Location : ");
    }
    else{
        die("Gagal Dihapus");
    }
}else{
    die("Gagal Terhubung dengan Database");
}
?>

<?php
include 'config.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from tbtransaksi where id=$id");
header("Location :");
?>
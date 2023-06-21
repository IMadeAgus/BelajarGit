<?php
include 'config.php';

if(!isset($_GET['id'])){
    header('Location : ');
}
$id = $_GET['id'];

if($id == null){
    header('Location : ');
}

$sql   = "SELECT * FROM tbtransaksi ";
$query = mysqli_query($koneksi, $sql);
$data  = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)<1){
    die("Data Tidak ditemukan!!");
}
?>

<!DOCTYPE html>
<html>
    <header>
    <h3>Edit Transaksi</h3>
    </header>

    <form name="FormEditTransaksi" action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php $data['id'] ?>">

        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="Nama" value="<?php echo $data['Nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>NoHp</td>
                <td>:</td>
                <td>
                    <input type="text" name="NoHp" value="<?php echo $data['NoHp'] ?>">
                </td>
            </tr>
            <tr>
                <td>Merek</td>
                <td>:</td>
                <td>
                    <input type="text" name="Merek" value="<?php echo $data['Merek'] ?>">
                </td>
            </tr>
            <tr>
                <td>TipeMobil</td>
                <td>:</td>
                <td>
                    <input type="text" name="TipeMobil" value="<?php echo $data['TipeMobil'] ?>">
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>
                    <input type="text" name="Harga" value="<?php echo $data['Harga'] ?>">
                </td>
            </tr>
            <tr>
                <td>TanggalPeminjaman</td>
                <td>:</td>
                <td>
                    <input type="text" name="TanggalPeminjaman" value="<?php echo $data['TanggalPeminjaman'] ?>">
                </td>
            </tr>
            <tr>
                <td>LamaPeminjaman</td>
                <td>:</td>
                <td>
                    <input type="text" name="LamaPeminjaman" value="<?php echo $data['LamaPeminjaman'] ?>">
                </td>
            </tr>
        </table>
    </form>
</html>
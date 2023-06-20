<?php
include 'koneksi.php';

if(!isset($_GET['id']) ){
    header('Location: ShowCarList.php');
}

$id = $_GET['id'];

if($id == null){
    header('Location: ShowCarList.php');
}

$sql = "SELECT * from tbmobil " ;
$query = mysqli_query($konek, $sql);
$data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("Data buku tidak ditemukan!");
}
?>

<!DOCTYPE html>
<html>

<body>
    <header>
        <h3>Edit List Mobil </h3>
    </header>

    <form name="FormEditCarList" action="EditCarList.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
        <table>
            <tr>
                <td>Merek Mobil</td>
                <td>:</td>
                <td>
                    <input type="text" name="MerekMobil" value="<?php echo $data['Merek']?>">
                </td>
            </tr>
            <tr>
                <td>Tipe Mobil</td>
                <td>:</td>
                <td><input type="text" name="TipeMobil" value="<?php echo $data['TipeMobil']?>"></td>
            </tr>
            <tr>
                <td>Plat Nomer </td>
                <td>:</td>
                <td><input type="text" name="PlatNomer" value="<?php echo $data['PlatNomer']?>"></td>
            </tr>
            <tr>
                <td>Foto Mobil </td>
                <td>:</td>
                <td><input type="file" name="FotoMobil" value="<?php echo $data['FotoMobil']?>"></td>
            </tr>
            <tr>
                <td>Harga </td>
                <td>:</td>
                <td><input type="number" name="Harga" value="<?php echo $data['Harga']?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="ubah" value="Simpan Perubahan">
                    <input type="reset" value="Batal">

                </td>
            </tr>

        </table>

    </form>

</body>

</html>
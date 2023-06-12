<!DOCTYPE html>
<html lang="en">
<?php include 'koneksi.php'?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- action="AddCarList.php"> -->
    <h5>Form ADD Cars</h5>

    <form name="FormAddCars" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Merek Mobil</td>
                <td>:</td>
                <td><input type="text" name="MerekMobil"></td>
            </tr>
            <tr>
                <td>Tipe Mobil</td>
                <td>:</td>
                <td><input type="text" name="TipeMobil"></td>
            </tr>
            <tr>
                <td>Plat Nomer </td>
                <td>:</td>
                <td><input type="text" name="PlatNomer"></td>
            </tr>
            <tr>
                <td>Foto Mobil </td>
                <td>:</td>
                <td><input type="file" name="FotoMobil"></td>
            </tr>
            <tr>
                <td>Harga </td>
                <td>:</td>
                <td><input type="number" name="Harga"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="Simpan">
                    <input type="reset" value="Batal">

                </td>
            </tr>

        </table>
    </form>
    <?php
    if (isset($_POST['simpan'])) {
        $folder = './mobil/';
        $name_p = $_FILES['FotoMobil']['name'];
        $sumber_p = $_FILES['FotoMobil']['tmp_name'];
        move_uploaded_file($sumber_p, $folder. $name_p);
        $insert = mysqli_query($konek, "INSERT INTO tbmobil VALUES(NULL, '" . $_POST['MerekMobil'] . "','" . $_POST['TipeMobil'] . "', '" . $_POST['PlatNomer'] . "', '" . $name_p . "', '" . $_POST['Harga'] . "')");
        if ($insert) {
            echo "Data Berhasil DI Simpan";
        }
        else {
            echo"Data Gagal Disimpan";
        }
    }
    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h5>Form ADD Cars</h5>
    <form name="FormAddCars" method="post" action="AddCarList.php">
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
                <td>Harga </td>
                <td>:</td>
                <td><input type="number" name="Harga"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Simpan">
                    <input type="reset" value="Batal">

                </td>
            </tr>

        </table>
    </form>
</body>

</html>
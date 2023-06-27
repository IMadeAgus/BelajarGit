<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootsrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />
</head>

<body>

    <div class="container-fluid vh-100">
        <!-- flex-container -->
        <div class="row d-flex h-100  justify-content-center align-content-center">
            <!-- flex-item -->
            <div class="col-lg-6  border border-3 rounded-3 ">
                <!-- Judul-form -->
                <h1 class="text-center border-bottom border-dark py-4">Form Add Car List</h1>
                <form name="FormAddCars" method="post" enctype="multipart/form-data" action="AddCarList.php">
                    <!-- user-input -->
                    <div class="mx-3">
                        <label class="form-label mt-3">Merek Mobil</label>
                        <input type="text" class="form-control" name="MerekMobil">
                        <label class="form-label mt-3">Tipe Mobil </label>
                        <input type="text" class="form-control" name="TipeMobil">
                        <label class="form-label mt-3 ">Deskirpsi </label>
                        <input type="text" class="form-control" name="Deskripsi">
                        <label class="form-label mt-3 ">Foto Mobil</label>
                        <input type="file" class="form-control" name="FotoMobil">
                        <label class="form-label mt-3 ">Harga</label>
                        <input type="number" class="form-control" name="Harga">
                        <!-- Button -->
                        <div class="d-flex my-5">
                            <input type="submit" class=" w-50  me-2 btn btn-danger border border-0" value="Cancel" name="batal">
                            <input type="submit" class="w-50 ms-2 btn btn-primary border border-0" value="simpan" name="simpan">
                        </div>
                </form>
            </div>
        </div>
    </div>

    <!-- <div class="container">

        <h5 class="align-text-center mt-5">Form ADD Cars</h5>

        <form name="FormAddCars" method="post" enctype="multipart/form-data" action="AddCarList.php">
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
                    <td>Deskripsi </td>
                    <td>:</td>
                    <td><input type="text" name="Deskripsi"></td>
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
    </div> -->
</body>

</html>
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
                            <input type="submit" class=" w-50  me-2 btn btn-danger border border-0" value="Cancel"
                                name="batal">
                            <input type="submit" class="w-50 ms-2 btn btn-primary border border-0" value="simpan"
                                name="simpan">
                        </div>
                </form>
            </div>
        </div>
    </div>


</body>

</html>
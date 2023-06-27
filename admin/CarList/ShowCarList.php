<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootsrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container vh-100">
        <!-- flex-container -->
        <div class="row d-flex h-100 justify-content-center align-content-center">
            <!-- flex-item -->
            <div class="col-lg-6 border border-3 rounded-3 form ">
                <!-- Judul-form -->
                <h1 class="text-center border-bottom border-dark py-4">Form Add Car List</h1>
                <form name="FormAddCars" method="post" enctype="multipart/form-data" action="AddCarList.php">
                    <!-- user-input -->
                    <div class="mx-3 ">
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
                            <input type="submit" class=" w-50  me-2 btn btn-danger border border-0" value="Cancel"
                                name="batal">
                            <input type="submit" class="w-50 ms-2 btn btn-primary border border-0" value="simpan"
                                name="simpan">
                        </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row d-flex align-items-center mt-4">
            <div class="col-4">
                <h2>Manage Car List</h2>
            </div>
            <!-- <div class="col-4"></div>
        <div class="col-4 d-flex align-items-end justify-content-end">
            <a class="btn btn-success" href="FormCarList.php">Tambah Mobil</a>
        </div> -->
        </div>
        <table class="table table-bordered text-center mt-2">
            <tr>
                <th>No</th>
                <th>Id</th>
                <th>Merek Mobil </th>
                <th>Tipe Mobil </th>
                <th>Deskripsi</th>
                <th>Foto Mobil</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
            <?php 
		include 'koneksi.php';
		$no = 1;
        $sql= ("select * from tbmobil");
		$query = mysqli_query($konek,$sql);
		while($data = mysqli_fetch_array($query)){
			?>
            <tr class="align-middle">
                <td><?php echo $no++; ?></td>
                <td><?=$data['id']?></td>
                <td><?=$data['Merek']?></td>
                <td><?=$data['TipeMobil']?></td>
                <td><?=$data['Deskripsi']?></td>
                <td><img src="mobil/<?=$data['FotoMobil']?>" alt="" style="max-width: 100px; max-height: 150px"></td>
                <td><?=$data['Harga']?></td>
                <td>
                    <a class="btn btn-info" href="FormEditCarList.php?id=<?php echo $data['id']; ?>">EDIT</a>

                    <a class="btn btn-danger" href="DeleteCarList.php?id=<?php echo $data['id']; ?>"
                        onclick="return confirm('Yakin mau Hapus?')">HAPUS</a>
                </td>
            </tr>
            <?php 
		}
		?>
        </table>
        <div class="row">
            <div class="d-flex align-items-end justify-content-end">
                <a href="cetakLaporan.php" class="btn btn-success" A>
                    Cetak
                </a>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootsrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/adminstyles.css" rel="stylesheet" />
    <!-- responsive css -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Feather Icons -->
    <script script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end text-white " style="background-color: #412496;" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom">
                BRAVO RENT CAR
            </div>
            <div class="list-group list-group-flush ">
                <a class="list-group-item list-group-item-action  text-white p-3" style="background-color: #412496;"
                    href="../index.php">Dashboard</a>
                <a class="list-group-item list-group-item-action  text-white p-3" style="background-color: #412496;"
                    href="Carlist/ShowCarList.php">CarList</a>
                <a class="list-group-item list-group-item-action  text-white  p-3" style="background-color: #412496;"
                    href="penyewa/tampilsewa.php">OrderList</a>
                <a class="list-group-item list-group-item-action  text-white p-3" style="background-color: #412496;"
                    href="#!">TransactionList</a>

            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg border-bottom" style="background-color: #412496;">
                <div class="container-fluid">
                    <button class="btn text-white" id="sidebarToggle">
                        <span><i data-feather="toggle-left"></i></span>
                    </button>
                    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span><i data-feather="list"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active  ">
                                <a class="nav-link text-white" href="#!">Home</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="#!">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                <div class="row d-flex  justify-content-center align-content-center mx-2 ">
                    <!-- flex-item -->
                    <div class="col-lg-12 card form ">
                        <!-- Judul-form -->
                        <h1 class="text-center border-bottom border-dark py-4">Form Add Car List</h1>
                        <form name="FormAddCars" method="post" enctype="multipart/form-data" action="AddCarList.php">
                            <!-- user-input -->
                            <div class="mx-3 ">
                                <label class="form-label mt-3">Tipe Mobil </label>
                                <input type="text" class="form-control" name="TipeMobil">
                                <label class="form-label mt-3 ">Deskirpsi </label>
                                <input type="text" class="form-control" name="Deskripsi">
                                <label class="form-label mt-3 ">Foto Mobil</label>
                                <input type="file" class="form-control" name="FotoMobil">
                                <label class="form-label mt-3 ">Harga</label>
                                <input type="number" class="form-control" name="Harga">
                                <!-- Button -->
                                <div class="d-flex  my-5">
                                    <input type="submit" class=" w-50  me-2 btn btn-danger border border-0"
                                        value="Cancel" name="batal">
                                    <input type="submit" class="w-50 ms-2 btn btn-primary border border-0"
                                        value="simpan" name="simpan">
                                </div>
                        </form>
                    </div>
                </div>


                <div class="row d-flex align-items-center mt-4">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <h2>Manage Car List</h2>
                    </div>
                </div>
                <table class="table table-bordered text-center mt-1 ">
                    <tr>
                        <th>No</th>
                        <th>Id</th>
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
                        <td><?=$data['TipeMobil']?></td>
                        <td><?=$data['Deskripsi']?></td>
                        <td><img src="mobil/<?=$data['FotoMobil']?>" alt="" style="max-width: 100px; max-height: 150px">
                        </td>
                        <td><?=$data['Harga']?></td>
                        <td>
                            <a class="btn btn-info" href="FormEditCarList.php?id='<?php echo $data['id'];?>'">EDIT</a>

                            <a class="btn btn-danger" href="DeleteCarList.php?id=<?php echo $data['id'];?>"
                                onclick="return confirm('Yakin mau Hapus?')">HAPUS</a>
                        </td>
                    </tr>
                    <?php }?>
                </table>
                <div class="row">
                    <div class="d-flex align-items-end justify-content-end">
                        <a href="cetakLaporan.php" class="btn btn-success" A>
                            Cetak
                        </a>
                    </div>
                </div>

                </disv>
            </div>
        </div>
</body>
<script src="js/bootstrap.bundle.js"></script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/adminscripts.js"></script>

<script>
feather.replace()
</script>
</body>

</html>
<?php
include '../../Koneksi/koneksi.php';

if(!isset($_GET['id']) ){
    header('Location: ShowCarList.php');
}

$id = $_GET['id'];

if($id == null){
    header('Location: ShowCarList.php');
}

$sql = "SELECT * from tbmobil WHERE id=$id " ;
$query = mysqli_query($konek, $sql);
$data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("Data mobil tidak ditemukan !");
}
?>

<!DOCTYPE html>
<html>
<link href="../css/adminstyles.css" rel="stylesheet" />
<!-- responsive css -->
<link rel="stylesheet" href="../css/responsive.css">

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end text-white " style="background-color: #412496;" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom">
                BRAVO RENT CAR
            </div>
            <div class="list-group list-group-flush ">
                <a class="list-group-item list-group-item-action  text-white p-3" style="background-color: #412496;"
                    href="#!">Dashboard</a>
                <a class="list-group-item list-group-item-action  text-white p-3" style="background-color: #412496;"
                    href="#">CarList</a>
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
                                <a class="nav-link text-white" href="../loginout/logout.php"
                                    onclick="return confirm('Yakin mau Log Out?')">LOG
                                    OUT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                <!-- flex-container -->
                <div class="row d-flex justify-content-center align-content-center mt-3 mx-1 card">
                    <!-- Judul-form -->
                    <h1 class="text-center border-bottom border-dark py-4">Form Edit Car List</h1>
                    <form name="FormEditCars" method="post" enctype="multipart/form-data" action="EditCarList.php">
                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
                        <!-- user-input -->
                        <div class="mx-3">
                            <label class="form-label mt-3">Tipe Mobil </label>
                            <input type="text" class="form-control" name="TipeMobil"
                                value="<?php echo $data['TipeMobil']?>">
                            <label class="form-label mt-3 ">Deskirpsi </label>
                            <input type="text" class="form-control" name="Deskripsi"
                                value="<?php echo $data['Deskripsi']?>">
                            <label class="form-label mt-3 ">Foto Mobil</label>
                            <input type="file" class="form-control" name="FotoMobil"
                                value="<?php echo $data['FotoMobil']?>">
                            <label class="form-label mt-3 ">Harga</label>
                            <input type="number" class="form-control" name="Harga" value="<?php echo $data['Harga']?>">
                            <!-- Button -->
                            <div class=" d-flex my-5">
                                <input type="submit" class=" w-50  me-2 btn btn-danger border border-0" value="Cancel"
                                    name="batal">
                                <input type="submit" class="w-50 ms-2 btn btn-primary border border-0" value="simpan"
                                    name="ubah">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/adminscripts.js"></script>
    <script>
    feather.replace()
    </script>

</body>

</html>
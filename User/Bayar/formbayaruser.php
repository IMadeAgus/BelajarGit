<html>

<head>
    <?php include '../../Koneksi/koneksi.php'; ?>
    <tittle>
        <link rel="stylesheet" href="../../Bootstrap/bootstrap.css" />
        <link rel="stylesheet" href="../../Css/formsewa-user.css">
        <!-- Css Responsive -->
        <link rel="stylesheet" href="../../Css/responsive.css">
        <!-- Feather Icons -->
        <script script src="https://unpkg.com/feather-icons"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
</tittle>

<?php 
$id=$_GET['id'];
$sql= mysqli_query($konek, "SELECT tb_penyewa.*, tbmobil.TipeMobil, tbmobil.Harga
FROM tb_penyewa 
JOIN tbmobil ON tb_penyewa.mobil_id=tbmobil.id 
WHERE tb_penyewa.id = $id ");
$hasil= mysqli_fetch_assoc($sql);
?>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top  navbar-light" style="background-color: #412496;">
        <div class="container-fluid py-2">
            <a class="navbar-brand fw-bold text-white d-flex align-items-center " href="#">
                <img src="../../img/logo.png" width="50" height="50" class="navbar-logo" alt="">
                BRAVO RENT CAR
            </a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span><i data-feather="list"></i></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="../final.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../final.php">CAR LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../orderlist.php">ORDER LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../gallery.php">GALLERY</a>
                    </li>
                    <li>
                        <a class="nav-link" href="../../loginout/logout.php"
                            onclick="return confirm('Yakin mau Log Out?')">LOG
                            OUT</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- //End Navbar Session -->

    <div class="bg">
        <div class="container  form ">
            <div class="row d-flex  justify-content-center ">
                <div class="col-lg-7 border border-3 rounded-5  bg-white">
                    <h1 class="text-center border-bottom border-dark pt-5 pb-3">Payment Form</h1>
                    <form name="formsewa" method="post" enctype="multipart/form-data" action="simpanbayaruser.php">
                        <div class="mx-3 ">
                            <label class="form-label mt-5 ">Tipe Mobil </label>
                            <input class="form-control" value="<?php echo $hasil['TipeMobil']?>" readonly>
                            <label class="form-label mt-3">Nama</label>
                            <input type="text" class="form-control" value="<?php echo $hasil['nama']?>" readonly>
                            <label class="form-label mt-3"> Harga : </label>
                            <input type="number" class="form-control" value="<?php echo $hasil['Harga']?>" readonly>
                            <label class="form-label mt-3 ">Tanggal Peminjaman </label>
                            <input type="date" class="form-control" value="<?php echo $hasil['tanggal_peminjaman']?>"
                                readonly>
                            <label class="form-label mt-3 ">Tanggal Pengembalian</label>
                            <input type="date" class="form-control" value="<?php echo $hasil['tanggal_pengembalian']?>"
                                readonly>
                            <label class="form-label mt-3 ">Lama Peminjaman(Hari)</label>
                            <input type="number" class="form-control" value="<?php echo $hasil['lama_peminjaman']?>"
                                readonly>
                            <label class="form-label mt-3 ">Total Harga</label>
                            <input type="number" class="form-control"
                                value="<?php echo $hasil['lama_peminjaman']*$hasil['Harga']?>" name="TotalHarga"
                                readonly>
                            <label class="form-label mt-3 ">Total Pembayaran</label>
                            <input type="number" class="form-control" name="TotalPembayaran">
                            <input type="hidden" name="id" value="<?php echo $id;?>" />
                            <div class="d-flex my-5 justify-content-end">
                                <input type="reset" class=" w-40  me-2 btn btn-danger border border-0" value="Cancel">
                                <input type="submit" class="w-40 ms-2 btn btn-primary border border-0" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <<!-- Footer -->
            <section class="Footer-sewauser ">
                <div class="container-fluid">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-4 py-5">

                            <a class="navbar-brand fw-bold text-white d-flex align-items-center " href="#">
                                <img src="../../img/logo2.png" width="55" height="55" class="navbar-logo" alt="">
                                <h3 class="fw-bold">BRAVO RENT CAR</h3>
                            </a>

                            <p class="text-white mt-2">Drive in Paradise, Feel the Bravo Vibes! </p>
                            <div>
                                <a href="https://www.instagram.com/bravoclasstrpl/"> <i
                                        class="fa-brands fa-instagram fa-2xl mx-3 icon-footer"
                                        style="color: #ffffff;"></i></a>
                                <i class="fa-brands fa-whatsapp fa-2xl mx-4 icon-footer" style="color: #ffffff;"></i>
                                <i class="fa-brands fa-square-facebook fa-2xl mx-3 icon-footer"
                                    style="color: #ffffff;"></i>
                            </div>
                        </div>
                        <div class="col-4">

                        </div>
                        <div class="col-4">
                            <div class="text-white mt-5 ">
                                <h3 class="fw-bold">Contact Us</h3>
                                <p class="mt-3">Kampus Bukit, Jimbaran, South Kuta, Badung Regency, Bali 80364</p>
                                <p>(0361) 701981</p>
                                <p>BravoRentCar@gmail.com</p>

                            </div>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center justify-content-center py-3">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <p class="text-white">Copyright@2023 BMWM Team. All Rights Reserved.</p>
                        </div>
                        <div class="col-4"></div>
                    </div>
                </div>

            </section>
    </div>

    <!-- Feather Icons -->
    <script>
    feather.replace()
    </script>
    <!-- Bootsrap js -->
    <script src="../../js/bootstrap.bundle.js"></script>
</body>
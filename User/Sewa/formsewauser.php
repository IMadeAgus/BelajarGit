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
    </tittle>

    <?php 
$id=$_GET['id'];
$sql= mysqli_query($konek, "SELECT * FROM tbmobil WHERE id = $id");
$hasil= mysqli_fetch_assoc($sql);
?>

    <!DOCTYPE html>
    <html lang="en">

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
    <!-- Form Sewa -->
    <div class="bg">
        <div class="container form ">
            <div class="row d-flex  justify-content-center ">
                <div class="col-lg-7 border border-3 rounded-5  bg-white px-5 py-2">
                    <h1 class="text-center border-bottom border-dark py-4">Rent Form</h1>
                    <form name="formsewa" method="post" enctype="multipart/form-data" action="tambahsewauser.php">

                        <div class="mx-3 ">
                            <input type="hidden" name="id" value="<?php echo $hasil['id'] ?>" />
                            <label class="form-label mt-5 ">Car</label>
                            <input class="form-control" value="<?php echo $hasil['TipeMobil']?>" readonly>
                            <label class="form-label mt-3">Name</label>
                            <input type="text" class="form-control" name="nama">
                            <label class="form-label mt-3">Phone Number </label>
                            <input type="text" class="form-control" name="no_hp">
                            <label class="form-label mt-3 ">Id Card Number </label>
                            <input type="text" class="form-control" name="no_ktp">
                            <label class="form-label mt-3 ">Price (Day) </label>
                            <input class="form-control" value="<?php echo $hasil['Harga']?>" readonly>
                            <label class="form-label mt-3 ">Loan Date</label>
                            <input type="date" class="form-control" name="tanggal_peminjaman">
                            <label class="form-label mt-3 ">Return Date</label>
                            <input type="date" class="form-control" name="tanggal_pengembalian">
                            <label class="form-label mt-3 ">Lenght of Loan</label>
                            <input type="number" class="form-control" name="lama_peminjaman">
                            <a href=""></a>
                            <div class="d-flex my-5 justify-content-end ">
                                <a class=" w-40  me-2 btn btn-danger border border-0" href="../final.php">Cancel</a>
                                <input type="submit" class="w-40 ms-2 btn btn-primary border border-0" value="Order"
                                    name="simpan">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- End Tablr Order List Session -->


        <!-- Footer -->
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
                            <i class="fa-brands fa-square-facebook fa-2xl mx-3 icon-footer" style="color: #ffffff;"></i>

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

    <!--  -->

    <!-- Feather Icons -->
    <script>
    feather.replace()
    </script>
    <!-- Bootsrap js -->
    <script src="../../js/bootstrap.bundle.js"></script>
</body>

</html>
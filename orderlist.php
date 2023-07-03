<!DOCTYPE html>
<html lang="en">
<?php include 'koneksi.php';?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Sewa Mobil</title>
    <!-- Bootsrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- CSS Custom -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- CSS Responsive -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Aos -->
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <!-- link swetalert2 -->
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top  navbar-light" style="background-color: #412496;">
        <div class="container-fluid py-2">
            <a class="navbar-brand fw-bold text-white d-flex align-items-center " href="#">
                <img src="img/logo.png" width="50" height="50" class="navbar-logo" alt="">
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
                        <a class="nav-link" href="final.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="final.php">CAR LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orderlist.php">ORDER LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">GALLERY</a>
                    </li>
                    <li>
                        <a class="nav-link" href="logout.php" onclick="return confirm('Yakin mau Log Out?')">LOG
                            OUT</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- //End Navbar Session -->

    <!-- Table Order List -->

    <div class="container-fluid">
        <div class="row d-flex align-items-center mt-4">
            <div class="col-4">
                <h2>Order List</h2>
            </div>
            <!-- <div class="col-4"></div>
        <div class="col-4 d-flex align-items-end justify-content-end">
            <a class="btn btn-success" href="FormCarList.php">Tambah Mobil</a>
        </div> -->
        </div>
        <table class="table table-bordered text-center mt-2">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Hp</th>
                <th>No KTP </th>
                <th>Tipe Mobil</th>
                <th>Harga</th>
                <th>TGl Peminjaman </th>
                <th>TGL Pengembalian</th>
                <th>Lama Peminjaman</th>
                <th>Aksi</th>
            </tr>
            <?php
    include 'koneksi.php';
    $no = 1;
    $sql = ("SELECT tb_penyewa.*,tbmobil.TipeMobil, tbmobil.Harga
    FROM tb_penyewa
    JOIN tbmobil ON tb_penyewa.mobil_id = tbmobil.id;");
    $query = mysqli_query($konek, $sql);
    while ($data = mysqli_fetch_array($query)) {
    ?>
            <tr class="align-middle">
                <td><?php echo $no++; ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['no_hp'] ?></td>
                <td><?= $data['no_ktp'] ?></td>
                <td><?= $data['TipeMobil'] ?></td>
                <td><?= $data['Harga'] ?></td>
                <td><?= $data['tanggal_peminjaman'] ?></td>
                <td><?= $data['tanggal_pengembalian'] ?></td>
                <td><?= $data['lama_peminjaman'] ?></td>

                <td>
                    <a class="btn btn-info" href="formbayaruser.php?id=<?php echo $data['id']; ?>">Pay</a>
                </td>
            </tr>
            <?php
    }
    ?>
        </table>
        <!-- <div class="row">
            <div class="d-flex align-items-end justify-content-end">
                <a href="print.php" class="btn btn-success" A>
                    Cetak
                </a>
            </div>
        </div> -->
    </div>


    <!-- End Tablr Order List Session -->


    <!-- Footer -->
    <section class="Footer ">
        <div class="container-fluid">
            <div class="row d-flex align-items-center justify-content-between">
                <div class="col-4 py-5">

                    <a class="navbar-brand fw-bold text-white d-flex align-items-center " href="#">
                        <img src="img/logo2.png" width="55" height="55" class="navbar-logo" alt="">
                        <h3 class="fw-bold">BRAVO RENT CAR</h3>
                    </a>

                    <p class="text-white mt-2">Drive in Paradise, Feel the Bravo Vibes! </p>
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
                <div class="col-lg-4 col-md-12 col-sm-12 mt-4">
                    <p class="text-white text-center">Copyright@2023 BMWM Team. All Rights Reserved.</p>
                </div>
            </div>
        </div>

    </section>

    <!--  -->


    <!-- Bootsrap js -->
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>
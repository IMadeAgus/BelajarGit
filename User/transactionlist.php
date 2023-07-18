<!DOCTYPE html>
<html lang="en">
<?php include '../Koneksi/koneksi.php';?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Sewa Mobil</title>
    <!-- Bootsrap -->
    <link rel="stylesheet" href="../Bootstrap/bootstrap.css" />
    <!-- CSS Custom -->
    <link rel="stylesheet" href="../Css/formsewa-user.css" />
    <!-- CSS Responsive -->
    <link rel="stylesheet" href="../Css/responsive.css">
    <!-- Aos -->
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <!-- link swetalert2 -->
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top  navbar-custom ">
        <div class="container py-2">
            <a class="navbar-brand fw-bold text-white d-flex align-items-center " href="#">
                <img src="../img/logo.png" width="50" height="50" class="navbar-logo" alt="">
                BRAVO RENT CAR
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="final.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="final.php">CAR LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">ORDER LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">GALLERY</a>
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

    <div class="container">
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
                <th>Total Harga</th>
                <th>Total Pembayaran</th>
                <th>Aksi</th>
            </tr>
            <?php
    
    $no = 1;
    $sql = ("SELECT tbpengembalian.*,  tb_penyewa.nama,tb_penyewa.no_hp,tb_penyewa.no_ktp,tb_penyewa.tanggal_peminjaman,tb_penyewa.tanggal_pengembalian,tb_penyewa.lama_peminjaman,tbmobil.TipeMobil,tbmobil.Harga
    FROM tbpengembalian
    JOIN tb_penyewa ON tbpengembalian.penyewa_id=tb_penyewa.id
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
        <div class="container">
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
                <div class="col-4"></div>
                <div class="col-4">
                    <p class="text-white">Copyright@2023 BMWM Team. All Rights Reserved.</p>
                </div>
                <div class="col-4"></div>
            </div>
        </div>

    </section>

    <!--  -->


    <!-- Bootsrap js -->
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>
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
    <!-- Aos -->
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <!-- link swetalert2 -->
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top  navbar-custom ">
        <div class="container py-2">
            <a class="navbar-brand fw-bold text-white d-flex align-items-center " href="#">
                <img src="img/logo.png" width="50" height="50" class="navbar-logo" alt="">
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
                        <a class="nav-link" href="orderlist.php">ORDER LIST</a>
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

    <!-- GALLERY -->
    <div class="container gallery">
        <h2 class="fw-bold  my-5">GALLERY</h2>
        <table>
            <!-- Baris 1 -->
            <tr>
                <td>
                    <img class="img" src="img/Promo.jpg" alt="">
                </td>
                <td>
                    <img class="img" src="img/Promo.jpg" alt="">
                </td>
                <td rowspan="2" colspan="2">
                    <img class="imgbesar" src="img/Promo.jpg" alt="">
                </td>
                <td></td>
            </tr>
            <!-- Baris 2 -->
            <tr>
                <td>
                    <img class="img" src="img/Driver.png" alt="">
                </td>
                <td>
                    <img class="img" src="img/Driver.png" alt="">
                </td>
            </tr>
            <!-- Baris 3 -->
            <tr>
                <td rowspan="2">
                    <img class="imgbesar" src="img/OnTime.png" alt="">
                </td>
                <td>
                    <img class="img" src="img/Driver.png" alt="">
                </td>
                <td>
                    <img class="img" src="img/Driver.png" alt="">
                </td>
                <td>
                    <img class="img" src="img/Driver.png" alt="">
                </td>
            </tr>
            <tr>
                <td>
                    <img class="img" src="img/Driver.png" alt="">
                </td>
                <td>
                    <img class="img" src="img/Driver.png" alt="">
                </td>
                <td>
                    <img class="img" src="img/Driver.png" alt="">
                </td>
            </tr>
        </table>
    </div>

    <!-- //end GALLERY session -->





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
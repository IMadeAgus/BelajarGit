<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Squadfree Bootstrap Template - Index</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Squadfree
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent">
        <div class="container d-flex align-items-center justify-content-between position-relative">
            <div class="logo">
                <h1 class="text-light">
                    <a href="index.html"><span>Bravo Rent CARS</span></a>
                </h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="web-user.php">Home</a></li>
                        <li><a class="nav-link scrollto" href="#">Sewa Mobil</a></li>
                        <li>
                            <a class="nav-link scrollto" href="#services">Retur Mobil</a>
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="#portfolio">Contact</a>
                        </li>
                        <li>
                            <a class="nav-link scrollto" href="logout.php"
                                onclick="return confirm('Yakin mau Log Out?')">Log Out</a>
                        </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <main id="main">
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                    <h2>Rent a Car with Driver</h2>
                    <p>Travel anywhere for 10 hours with unlimited fuel and mileage.</p>

                    <p>
                        No deposit is required - only pay in cash when you meet your
                        driver.
                    </p>
                    <br />
                    <p>
                        Grab your car & driver by clicking “BOOK THIS CAR” button at each
                        car model below, or simply click this number to reach to us on
                        WhatsApp: +628123854432
                    </p>
                </div>

                <!-- Tag Php Untuk Menampilkan -->
                <?php
    include "koneksi.php";
    $mobil = mysqli_query($konek,"select * FROM tbmobil");?>

                <div class="row" data-aos="fade-in">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-Honda">Honda</li>
                            <li data-filter=".filter-Toyota">Toyota</li>
                            <li data-filter=".filter-Suzuki">Suzuki</li>
                        </ul>
                    </div>
                </div>

                <?php 
                while($hasil =mysqli_fetch_array($mobil)){
                ?>


                <div class="row portfolio-container" data-aos="fade-up">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $hasil['Merek'];?>">
                        <div class="card" style="width: 18rem">
                            <img src="admin/Car List/mobil/<?php echo $hasil['FotoMobil'];?>"
                                class="card-img-top img-fluid" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $hasil['Merek']." -".$hasil['TipeMobil'];?></h5>
                                <h5></h5>
                                <p class="card-text">
                                    Harga : <?php echo $hasil['Harga'];?>
                                </p>
                                <p>for 4 passengers (maximum 7 without luggage)</p>
                                <a href="formsewa.php" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <?php } ?>


                    <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-toyota">
                            <div class="card" style="width: 18rem">
                                <img src="assets/img/portfolio/Toyota-Inova.png" class="card-img-top img-fluid"
                                    alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Toyota Inova</h5>
                                    <h5></h5>
                                    <p class="card-text">
                                        Half Day : USD 26 / 5 hours Over Time : 10% from price /
                                        hours
                                    </p>
                                    <p>for 4 passengers (maximum 7 without luggage)</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-suzuki">
                            <div class="card" style="width: 18rem">
                                <img src="assets/img/portfolio/Suzuki-ERTIGA.png" class="card-img-top img-fluid"
                                    alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Suzuki ERTIGA</h5>
                                    <h5></h5>
                                    <p class="card-text">
                                        Half Day : USD 26 / 5 hours Over Time : 10% from price /
                                        hours
                                    </p>
                                    <p>for 4 passengers (maximum 7 without luggage)</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-honda">
                            <div class="card" style="width: 18rem">
                                <img src="assets/img/portfolio/Honda-HRV.png" class="card-img-top img-fluid"
                                    alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Honda HRV</h5>
                                    <h5></h5>
                                    <p class="card-text">
                                        Half Day : USD 26 / 5 hours Over Time : 10% from price /
                                        hours
                                    </p>
                                    <p>for 4 passengers (maximum 7 without luggage)</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-suzuki">
                            <div class="card" style="width: 18rem">
                                <img src="assets/img/portfolio/Suzuki-ERTIGA.png" class="card-img-top img-fluid"
                                    alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Suzuki ERTIGA</h5>
                                    <h5></h5>
                                    <p class="card-text">
                                        Half Day : USD 26 / 5 hours Over Time : 10% from price /
                                        hours
                                    </p>
                                    <p>for 4 passengers (maximum 7 without luggage)</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-toyota">
                            <div class="card" style="width: 18rem">
                                <img src="assets/img/portfolio/Toyota-Inova.png" class="card-img-top img-fluid"
                                    alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Toyota Inova</h5>
                                    <h5></h5>
                                    <p class="card-text">
                                        Half Day : USD 26 / 5 hours Over Time : 10% from price /
                                        hours
                                    </p>
                                    <p>for 4 passengers (maximum 7 without luggage)</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-suzuki">
                            <div class="card" style="width: 18rem">
                                <img src="assets/img/portfolio/Suzuki-ERTIGA.png" class="card-img-top img-fluid"
                                    alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Suzuki ERTIGA</h5>
                                    <h5></h5>
                                    <p class="card-text">
                                        Half Day : USD 26 / 5 hours Over Time : 10% from price /
                                        hours
                                    </p>
                                    <p>for 4 passengers (maximum 7 without luggage)</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-toyota">
                            <div class="card" style="width: 18rem">
                                <img src="assets/img/portfolio/Toyota-Inova.png" class="card-img-top img-fluid"
                                    alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Toyota Inova</h5>
                                    <h5></h5>
                                    <p class="card-text">
                                        Half Day : USD 26 / 5 hours Over Time : 10% from price /
                                        hours
                                    </p>
                                    <p>for 4 passengers (maximum 7 without luggage)</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-honda">
                            <div class="card" style="width: 18rem">
                                <img src="assets/img/portfolio/Honda-HRV.png" class="card-img-top img-fluid"
                                    alt="..." />
                                <div class="card-body">
                                    <h5 class="card-title">Honda HRV</h5>
                                    <h5></h5>
                                    <p class="card-text">
                                        Half Day : USD 26 / 5 hours Over Time : 10% from price /
                                        hours
                                    </p>
                                    <p>for 4 passengers (maximum 7 without luggage)</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
        </section>
        <!-- End Portfolio Section -->

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>Squadfree</h3>
                            <p class="pb-3">
                                <em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit
                                    veniam excepturi quod.</em>
                            </p>
                            <p>
                                A108 Adam Street <br />
                                NY 535022, USA<br /><br />
                                <strong>Phone:</strong> +1 5589 55488 55<br />
                                <strong>Email:</strong> info@example.com<br />
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Home</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">About us</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Services</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Terms of service</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Privacy policy</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Web Design</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Web Development</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Product Management</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i> <a href="#">Marketing</a>
                            </li>
                            <li>
                                <i class="bx bx-chevron-right"></i>
                                <a href="#">Graphic Design</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Our Newsletter</h4>
                        <p>
                            Tamen quem nulla quae legam multos aute sint culpa legam noster
                            magna
                        </p>
                        <form action="" method="post">
                            <input type="email" name="email" /><input type="submit" value="Subscribe" />
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Squadfree</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>
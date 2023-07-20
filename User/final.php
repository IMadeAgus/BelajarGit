<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Sewa Mobil</title>
    <!-- Bootsrap -->
    <link rel="stylesheet" href="../Bootstrap/bootstrap.css" />
    <!-- CSS Custom -->
    <link rel="stylesheet" href="../Css/style.css" />
    <!-- Css Responsive -->
    <link rel="stylesheet" href="../Css/responsive.css">
    <!-- Feather Icons -->
    <script script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/customer-review.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top  navbar-light" style="background-color: #412496;">
        <div class="container-fluid py-2">
            <a class="navbar-brand fw-bold text-white d-flex align-items-center " href="#">
                <img src="../img/logo.png" width="50" height="50" class="navbar-logo" alt="">
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
                        <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#CarList">CAR LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orderlist.php">ORDER LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">GALLERY</a>
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

    <!-- Hero -->
    <section class="hero" id="home">
        <main class="content text-white">
            <h1 class="fw-bold">BRAVO RENT CAR</h1>
            <h3 class="mt-2">Drive in Paradise, Feel the Bravo Vibes!</h3>
        </main>
    </section>
    <!-- Hero Section end -->

    <!-- Banner  -->
    <div class="container-fluid banner">
        <div class="row my-5">
            <div class="col-lg-7 col-md-12 col-sm-12 mt-4 text-black content">
                <h2 class="fw-bold">Welcome To Bravo Rent Car</h2>
                <h5 class="mt-4">
                    Travel around Bali in a new car with your personal, English’s speaking driver.
                </h5>
                <h5 class="mt-4">
                    Get 10 hours daily service, fuel and unlimited mileage to go just anywhere you want!
                    Plan any tour, get a ride to beaches, shops and restaurants. </h5>
                </5h>
                <h5 class="mt-4">
                    Book without credit card, change or cancel reservation any time, free of charge.
                </h5>
                <div class="my-5">
                    <a href="#CarList" class="btn tombol rounded-3">
                        <h5>Book a Car Now</h5>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <!--//End Banner session  -->

    <!-- Promo -->
    <section class="Promo d-flex justify-content-center align-items-center">
        <main class=" text-white content fw-bold ">
            <h1>Bravo Rent Car Best Offers</h1>
            <h3 class="mt-4">* Free Airport Pickup for an Elevated Experience</h3>
            <h3 class="mt-4">* Get free one cup of Luwak coffee in coffee plantation</h3>
            <h3 class="mt-4 pb-5">* Get free banana boat for one person (If book more then two days).</h3>
        </main>
    </section>
    <!--//End Promo session -->

    <!-- Service -->
    <div class=" service container-fluid my-5">
        <h2 class="fw-bold text-center">Service</h2>
        <div class="row content ">
            <div class="col-lg-4 col-md-12 col-sm-12 mt-4">
                <div class="card text-center">
                    <div class="d-flex justify-content-center align-items-center ">
                        <img src="../img/Driver.png" alt="">
                    </div>
                    <h4 class=" text-center fw-bold mt-4 mb-3">
                        Professional Driver
                    </h4>
                    <div class="text-center mx-3">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                            atque laboriosam nulla nihil dolore in illo enim quia,
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mt-4">
                <div class="card text-center">
                    <div class="d-flex justify-content-center align-items-center ">
                        <img src="../img/OnTime.png" alt="">
                    </div>
                    <h4 class="fw-bold  mt-4 mb-3">
                        On Time
                    </h4>
                    <div class="mx-3">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                            atque laboriosam nulla nihil dolore in illo enim quia,
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mt-4">
                <div class="card text-center">
                    <div class="d-flex justify-content-center align-items-center  ">
                        <img class="ExcelentCars" src="../img/ExcelentCars.png" alt="">
                    </div>
                    <h4 class=" text-center fw-bold mt-1 mb-3">
                        Excellent Cars
                    </h4>

                    <div class="text-center mx-3 ">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                            atque laboriosam nulla nihil dolore in illo enim quia,
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//End Service session -->

    <!-- List Car -->
    <?php
    include "../Koneksi/koneksi.php";
    $sql = mysqli_query($konek, "SELECT * FROM tbmobil");
?>

    <div class="container-fluid  carlist" id="CarList">
        <div class="row mt-5">
            <div class="col-lg-8 col-md-8 col-sm-12 content">
                <h4 class="fw-bold">Rent a Car With Driver</h4>
                <p class="mt-4">
                    Travel around Bali in a new car with your personal, English’s speaking driver.
                </p>
                <p class="mt-2">
                    No deposit is required – only pay in cash when you meet your driver.
                </p>
                <p class="mt-2">
                    Grab your car & driver by clicking “BOOK THIS CAR” button at each car model below, or simply click
                    this number to reach to us on WhatsApp: +628123854432
                </p>
            </div>

        </div>
        <div class="row">
            <?php 
            $counter = 1; // counter untuk menghitung jumlah card yang ditampilkan
            while ($hasil = mysqli_fetch_array($sql)) {
                ?>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-4">
                <div class="card text-center d-flex justify-content-center align-items-center">
                    <div class=" fotomobil  img-fluid">
                        <img src="../admin/CarList/mobil/<?php echo $hasil['FotoMobil'];?>" class="card-img-top   "
                            alt="..." />
                    </div>
                    <div class="card-body">
                        <h3 class="card-title fw-bold"><?php echo $hasil['TipeMobil'];?></h3>
                        <p class="card-text fw-semibold">
                            IDR <?php echo $hasil['Harga'];?>
                        </p>
                        <p><?php echo $hasil['Deskripsi'];?></p>
                        <a class="btn tombol my-3 fw-bold rounded-5 text-center"
                            href="Sewa/formsewauser.php?id='<?php echo $hasil['id'];?>'">
                            <h5>Order Now</h5>
                        </a>
                    </div>
                </div>
            </div>

            <?php 
                if ($counter % 4 == 0) { // setiap 4 card, tambahkan div baru untuk membuat baris baru
                    echo '</div><div class="row" >';
                }
                $counter++;
            }
        ?>
        </div>
    </div>
    <!-- //End List Car session -->

    <!-- Customer Review -->
    <div class="container-lg mt-5 pt-5">
        <div class="row">
            <div class="col-sm-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <h2>Customer <b>Testimonials</b></h2>
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor,
                                            varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel,
                                            semper malesuada ante.</p>
                                    </div>
                                    <div class="media d-flex">
                                        <img src="../img/Driver/Made.jpeg" class="mr-3" alt="">
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Made Agus</b></div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt.
                                            Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat
                                            faucibus quam.</p>
                                    </div>
                                    <div class="media d-flex">
                                        <img src="../img/Driver/Weda.jpeg" class="mr-3" alt="">
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Weda Pradnyana</b></div>

                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor,
                                            varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel,
                                            semper malesuada ante.</p>
                                    </div>
                                    <div class="media d-flex">
                                        <img src="../img/Driver/Bagus.jpg" class="mr-3" alt="">
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Bagus Sadewa</b></div>

                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt.
                                            Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat
                                            faucibus quam.</p>
                                    </div>
                                    <div class="media d-flex">
                                        <img src="../img/Driver/Krisna.jpeg" class="mr-3" alt="">
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Steve</b></div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor,
                                            varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel,
                                            semper malesuada ante.</p>
                                    </div>
                                    <div class="media d-flex">
                                        <img src="/examples/images/clients/5.jpg" class="mr-3" alt="">
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Agness</b></div>

                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="testimonial">
                                        <p>Vestibulum quis quam ut magna consequat faucibu. Eget mi suscipit tincidunt.
                                            Utmtc tempus dictum. Pellentesque virra. Quis quam ut magna consequat
                                            faucibus quam.</p>
                                    </div>
                                    <div class="media d-flex">
                                        <div class="media-left d-flex mr-3">
                                            <img src="../img/Driver/Mangwah2.jpeg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="overview">
                                                <div class="name"><b>Mangwah</b></div>
                                                <div class="star-rating">
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                                        <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control-prev btn btn-dark" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <a class="carousel-control-next btn btn-dark" href="#myCarousel" data-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- //end Customer Review session -->

    <!-- Our Driver -->
    <div class="container-fluid driver ">
        <h2 class="fw-bold d-flex  justify-content-center pt-5 my-5">Our Driver</h2>
        <div class="row mt-5 container-foto ">
            <div class="col-3 ">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="../img/Driver/Bagus.jpg" class="  rounded-4" alt=""
                        style="max-width: 300px; max-height: 300px">
                </div>
                <div class="mt-2">
                    <h3 class="text-center">Bagus Sadewa </h3>
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-center align-items-center ">
                    <img src="../img/Driver/Made.jpeg" class="  rounded-4" alt=""
                        style="max-width: 300px; max-height:300px">
                </div>
                <div class="mt-2">
                    <h3 class="text-center">Made Agus </h3>
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-center align-items-center ">
                    <img src="../img/Driver/Weda.jpeg" class="  rounded-4" alt=""
                        style="max-width: 300px; max-height: 300px">
                </div>
                <div class="mt-2">
                    <h3 class="text-center">Weda Pradnyana </h3>
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-center align-items-center ">
                    <img src="../img/Driver/Mangwah2.jpeg" class="  rounded-4" alt=""
                        style="max-width: 300px; max-height: 300px">
                </div>
                <div class="mt-2">
                    <h3 class="text-center">Komang Wahyudita </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- //end Our Driver session -->

    <!-- Footer -->
    <section class="Footer ">
        <div class="container-fluid">
            <div class="row d-flex align-items-center justify-content-between">
                <div class="col-4 py-5">

                    <a class="navbar-brand fw-bold text-white d-flex align-items-center " href="#">
                        <img src="../img/logo2.png" width="55" height="55" class="navbar-logo" alt="">
                        <h3 class="fw-bold">BRAVO RENT CAR</h3>
                    </a>
                    <p class="text-white mt-2">Drive in Paradise, Feel the Bravo Vibes! </p>
                    <div>
                        <a href="https://www.instagram.com/bravoclasstrpl/"> <i
                                class="fa-brands fa-instagram fa-2xl mx-3 icon-footer" style="color: #ffffff;"></i></a>
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
                <div class="col-lg-4 col-md-12 col-sm-12 mt-4">
                    <p class="text-white text-center">Copyright@2023 BMWM Team. All Rights Reserved.</p>
                </div>
            </div>
        </div>

    </section>

    <!--  -->

    <!-- Bootsrap js -->
    <script src="../js/bootstrap.bundle.js"></script>
    <!-- Feather Icons -->
    <script>
    feather.replace()
    </script>
</body>

</html>
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
                        <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#CarList">CAR LIST</a>
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

    <!-- Hero -->
    <section class="hero" id="home">
        <main class="content text-white">
            <h1 class="fw-bold">BRAVO RENT CAR</h1>
            <h3 class="mt-2">Drive in Paradise, Feel the Bravo Vibes!</h3>
        </main>
    </section>
    <!-- Hero Section end -->

    <!-- Banner  -->
    <div class="container banner">
        <div class="row my-5">
            <div class="col-8 text-black content">
                <h2 class="fw-bold">Welcome To Bravo Rent Car</h2>
                <p class="mt-4">
                    Travel around Bali in a new car with your personal, English’s speaking driver.
                </p>
                <p class="mt-4">
                    Get 10 hours daily service, fuel and unlimited mileage to go just anywhere you want!
                    Plan any tour, get a ride to beaches, shops and restaurants.
                </p>
                <p class="mt-4">
                    Book without credit card, change or cancel reservation any time, free of charge.
                </p>
                <div class="my-5">
                    <a href="#CarList" class="btn tombol"> Book a Car Now</a>
                </div>
            </div>

        </div>
    </div>
    <!--//End Banner session  -->

    <!-- Promo -->
    <section class="Promo">
        <main class="content text-white ">
            <h1 class="fw-bold">Bravo Rent Car Best Offers</h1>
            <h4 class="mt-4">* Free Airport Pickup for an Elevated Experience</h4>
            <h4 class="mt-4">* Get free one cup of Luwak coffee in coffee plantation</h4>
            <h4 class="mt-4">* Get free banana boat for one person (If book more then two days).</h4>
        </main>
    </section>
    <!--//End Promo session -->

    <!-- Service -->
    <div class=" service container my-5">
        <h2 class="fw-bold text-center">Service</h2>
        <div class="row content ">
            <div class="col-4">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="img/Driver.png" alt="">
                </div>
                <h4 class=" text-center fw-bold mt-4 mb-3">
                    Professional Driver
                </h4>
                <div class="text-center mx-5">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                        atque laboriosam nulla nihil dolore in illo enim quia,
                    </p>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="img/OnTime.png" alt="">
                </div>
                <h4 class="fw-bold text-center mt-4 mb-3">
                    On Time
                </h4>
                <div class="text-center mx-5">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                        atque laboriosam nulla nihil dolore in illo enim quia,
                    </p>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex justify-content-center align-items-center ">
                    <img class="ExcelentCars" src="img/ExcelentCars.png" alt="">
                </div>
                <h4 class=" text-center fw-bold mt-1 mb-3">
                    Excellent Cars
                </h4>

                <div class="text-center mx-5 ">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                        atque laboriosam nulla nihil dolore in illo enim quia,
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--//End Service session -->

    <!-- List Car -->
    <?php
    include "koneksi.php";
    $sql = mysqli_query($konek, "SELECT * FROM tbmobil");
?>

    <div class="container  carlist" id="CarList">
        <div class="row mt-5">
            <div class="col-8 content">
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
                <div class="card text-center">
                    <img src="admin/CarList/mobil/<?php echo $hasil['FotoMobil'];?>" class="card-img-top img-fluid"
                        alt="..." />
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><?php echo $hasil['TipeMobil'];?></h5>
                        <p class="card-text fw-semibold">
                            IDR <?php echo $hasil['Harga'];?>
                        </p>
                        <p><?php echo $hasil['Deskripsi'];?></p>
                        <a class="btn tombol" href="formsewauser.php?id='<?php echo $hasil['id'];?>'">Order Now</a>
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

    <!-- Customer Review -->
    <div class="container gallery">
        <div class="row mt-5 ">
            <h2 class="fw-bold d-flex  justify-content-center mb-5">Customer Review</h2>
        </div>
    </div>
    <!-- //end Customer Review session -->

    <!-- Our Driver -->
    <div class="container driver">
        <h2 class="fw-bold d-flex  justify-content-center mb-5">Our Driver</h2>
        <div class="row mt-5 ">
            <div class="col-3">
                <div class="d-flex justify-content-center align-items-center ">
                    <img src="img/Driver.png" alt="">
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-center align-items-center ">
                    <img src="img/Driver.png" alt="">
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-center align-items-center ">
                    <img src="img/Driver.png" alt="">
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-center align-items-center ">
                    <img src="img/Driver.png" alt="">
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-3">
                <div class="d-flex justify-content-center align-items-center ">
                    <img src="img/Driver.png" alt="">
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-center align-items-center ">
                    <img src="img/Driver.png" alt="">
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-center align-items-center ">
                    <img src="img/Driver.png" alt="">
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-center align-items-center ">
                    <img src="img/Driver.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- //end Our Driver session -->

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
<!DOCTYPE html>
<html lang="en">
<?php include'koneksi.php'?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Sewa Mobil</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=PT+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <!-- Bootsrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- CSS Custom -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Aos -->
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <!-- link swetalert2 -->
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top  navbar-custom ">
        <div class="container py-2">
            <a class="navbar-brand text-white" href="#">Bravo Rent Car</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#skills">Sewa Mobil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portofolio">Retur Mobil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li>
                        <a class="nav-link" href="logout.php" onclick="return confirm('Yakin mau Log Out?')">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- //End Navbar Session -->

    <!-- <div class="hero-section">
            <div class="hero-section-text">
               
            </div>
        </div> -->
    <!-- Banner -->
    <section class="hero" id="home">
        <main class="content text-white">
            <h1>Bravo Rent Car</h1>
            <h5 class="mt-2">Drive in Paradise, Feel the Bravo Vibes!</h5>
            <a href="#" class="btn tombol mt-3">Book a Car Now</a>
        </main>

    </section>
    <div class="container">
        <!-- Banner  -->
        <div class="row mt-5">
            <div class="col-8 text-black content-">
                <h4 class="fw-bold">Welcome To Bravo Rent Car</h4>
                <br>
                <p>
                    Travel around Bali in a new car with your personal, English’s speaking driver.
                </p>
                <br>
                <p>
                    Get 10 hours daily service, fuel and unlimited mileage to go just anywhere you want!
                    Plan any tour, get a ride to beaches, shops and restaurants.
                </p>
                <br>
                <p>
                    Book without credit card, change or cancel reservation any time, free of charge.
                </p>
                <br>
                <div class="my-3">
                    <a href="propage.html" class="btn tombol"> Pesan Sekarang</a>
                </div>
            </div>

        </div>
    </div>

    <!--//End Banner session  -->

    <!-- Promo -->

    <!--//End Promo session -->

    <!-- Service -->

    <!--//End Service session -->

    <!-- List Car -->

    <!-- //End List Car session -->

    <?php
    include "koneksi.php";
    $sql = mysqli_query($konek, "SELECT * FROM tbmobil");
?>

    <div class="container">
        <div class="row portfolio-container" data-aos="fade-up">
            <?php 
            $counter = 1; // counter untuk menghitung jumlah card yang ditampilkan
            while ($hasil = mysqli_fetch_array($sql)) {
                ?>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-4">
                <div class="card">
                    <img src="admin/CarList/mobil/<?php echo $hasil['FotoMobil'];?>" class="card-img-top img-fluid"
                        alt="..." />
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

            <?php 
                if ($counter % 4 == 0) { // setiap 4 card, tambahkan div baru untuk membuat baris baru
                    echo '</div><div class="row portfolio-container" data-aos="fade-up">';
                }
                $counter++;
            }
        ?>
        </div>
    </div>



    <!-- Feather Icons js -->
    <script>
    feather.replace()
    </script>
    <!-- Bootsrap js -->
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>
<?php
session_start();

if(!isset($_SESSION['username'])){
    header('location: index.php');
}




// if (isset($_POST['submit'])) {
// 	$email = $_POST['email'];
// 	$password = md5($_POST['password']);

// 	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
// 	$result = mysqli_query($conn, $sql);
// 	if ($result->num_rows > 0) {
// 		$row = mysqli_fetch_assoc($result);
// 		$_SESSION['username'] = $row['username'];
// 		header("Location: menu.php");
// 	} else {
// 		echo "<script>alert('Woops! Email Atau Password anda Salah.')</script>";
// 	}
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project 1</title>
    <!-- Bootsrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/css/all.css" />
    <!-- CSS Custom -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- link swetalert2 -->
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top bg-navbar">
        <div class="container navbar-custom py-4">
            <a class="navbar-brand text-white" href="#">Bravo Rent Cars</a>
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
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" onclick="return confirm('Yakin mau Log Out?')">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Halaman about -->
    <div>
        <div class="container">
            <div class="row">
                <div class="col-12 my-5 content-about" data-aos="fade-up" data-aos-duration="2000">

                    <!-- <img src="Banner.jpg" alt=""> -->
                </div>
                <div class="row mt-5">
                    <h2 class="text-white fw-bold" id="skills">Daftar Mobil</h2>
                    <p class="text-white fw-bold" id="skills">Sewa Mobil Bali Murah Termasuk Supir & BBM </p>
                    <div class="col-6 text-white">
                        <div class="card-skill rounded-3 p-5" data-aos="flip-left" data-aos-duration="1000">
                            <div class="mb-3">
                                <h4 class="d-flex align-items-center">
                                    New Innova Reborn Th.2022 Up + Supir,
                                    Bensin, Parkir & Tol
                                </h4>
                                <br>
                                <div class="d-flex justify-content-center"><img class="img-Mobil" src="Innova.png"
                                        alt=""></div>
                                <p>
                                    Hanya 700.000
                                </p>
                                <a href="#" class="btn btn-primary">Pesan</a>
                            </div>
                        </div>
                        <div class="card-skill rounded-3 p-5 mt-4" data-aos="flip-left" data-aos-duration="1000">
                            <div class=" mb-3">
                                <h4 class="d-flex align-items-center">
                                    New Innova Reborn Th.2022 Up + Supir,
                                    Bensin, Parkir & Tol
                                </h4>
                                <br>
                                <div class="d-flex justify-content-center"><img class="img-Mobil" src="Avansa.png"
                                        alt=""></div>
                                <p>
                                    Hanya 700.000
                                </p>
                                <a href="#" class="btn btn-primary">Pesan</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 text-white">
                        <div class="card-skill rounded-3 p-5" data-aos="flip-left" data-aos-duration="1000">
                            <div class=" mb-3">
                                <h4 class="d-flex align-items-center">
                                    New Innova Reborn Th.2022 Up + Supir,
                                    Bensin, Parkir & Tol
                                </h4>
                                <br>
                                <div class="d-flex justify-content-center"><img class="img-Mobil" src="Innova.png"
                                        alt=""></div>
                                <p>
                                    Hanya 700.000
                                </p>
                                <a href="#" class="btn btn-primary">Pesan</a>
                            </div>
                        </div>
                        <div class="card-skill rounded-3 p-5 mt-4" data-aos="flip-left" data-aos-duration="1000">
                            <div class=" mb-3">
                                <h4 class="d-flex align-items-center">
                                    New Innova Reborn Th.2022 Up + Supir,
                                    Bensin, Parkir & Tol
                                </h4>
                                <br>
                                <div class="d-flex justify-content-center"><img class="img-Mobil" src="Innova.png"
                                        alt=""></div>
                                <p>
                                    Hanya 700.000
                                </p>
                                <a href="#" class="btn btn-primary">Pesan</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="container text-white border-footer py-4 ">
                    <p class="text-center">Reach me out</p>
                    <ul class="d-flex justify-content-center footer">
                        <li><a href=""><i class="fa-brands fa-github"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-whatsapp mx-5"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>

            </div>
            <div style="height: 500px"></div>
        </div>



        <!-- Bootsrap js -->
        <script src="js/bootstrap.bundle.js"></script>
</body>

</html>
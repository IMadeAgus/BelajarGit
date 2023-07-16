<?php

include 'koneksi_tampil.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header('Location: login.php');
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['Cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['Cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}

	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootsrap -->
    <link rel="stylesheet" href="../Bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="Login.css">
    <!-- Css Responsive -->
    <link rel="stylesheet" href="../Css/responsive.css">
</head>

<body>

    <!-- Navbar -->
    <div class="bg mb-5">
        <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top  navbar-light "
            style="background-color: #412496;">
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


            </div>
        </nav>

        <div class="d-flex justify-content-center form-login ">
            <div class="login-custom">
                <form action="" method="POST" class="login-email">
                    <p style="font-size:2em;font-weight:850;">Register</p>
                    <div class="input-group"><input type="text" placeholder="UserName" name="username"
                            value="<?php echo $username;?>">
                    </div>
                    <div class="input-group"><input type="text" placeholder="Email" name="email"
                            value="<?php echo $email;?>">
                    </div>

                    <div class="input-group"><input type="password" placeholder="Password" name="Password"
                            value="<?php echo $_POST['password']?>" required>
                    </div>

                    <div class="input-group"><input type="password" placeholder="Confirmasi Password" name="Cppassword"
                            value="<?php echo $_POST['Cppassword']?>" required>
                    </div>
                    <div class="input-group">
                        <button name="submit" class="tombol">Register</button>
                    </div>
                    <p class="login-register-text">Have an Account ?
                        <a href="login.php">Log In</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <section class="Footer mt-5">
        <div class="container-fluid">
            <div class="row d-flex align-items-center justify-content-between">
                <div class="col-4 py-5">

                    <a class="navbar-brand fw-bold text-white d-flex align-items-center " href="#">
                        <img src="../img/logo2.png" width="55" height="55" class="navbar-logo" alt="">
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
</body>

</html>
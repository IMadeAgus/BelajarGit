<?php

include 'config.php'; // konfigurasi untuk mengkoneksikan ke data base

session_start(); // untuk menginisiasi sesi, menjaga status login di berbagai halaman 

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: web-user.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
    
	if ($result->num_rows > 0) { //ketika sudah cocok dengan yang sudah didaftarkan maka user berhasil login.
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: web-user.php");
	} else {
		echo "<script>alert('Woops! Email Atau Password anda Salah.')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p style="font-size: 2rem; font-weight: 850;">Log In User</p>

            <div class="input-group"><input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>"
                    required></div>

            <div class="input-group"><input type="password" placeholder="Password" name="Password"
                    value="<?php echo $_POST['password']; ?>" required></div>


            <div class="input-group"><button name="submit" class="btn">Log In</button>
            </div>
            <div class="login-register-text">Log In for
                <a href="loginadmin.php">admin | </a>
                <a href="login.php">user</a>
            </div>
            <p class="login-register-text">Don't Have an Account ?
                <a href="register.php">Register</a>.
            </p>
        </form>
    </div>
</body>

</html>
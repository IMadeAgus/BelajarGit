<html>

<head>
    <link rel="stylesheet" type="text/css" href="Login.css">
</head>

<body>

    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

    <div class="container">
        <form action="cek-login.php" method="post" class="login-email">
            <p style="font-size: 2rem; font-weight: 850;">Log In Admin</p>

            <div class="input-group"><input type="text" name="email" class="form_login" placeholder="Email .."
                    id="email" required="required">
            </div>


            <div class="input-group"><input type="password" name="password" class="form_login" placeholder="Password .."
                    id="email" required="required">
            </div>

            <div class="input-group"><button name="submit" class="btn">Log In</button></div>




            <div class="login-register-text">
                <a href="login.php">Kembali. </a>
            </div>

        </form>
    </div>
</body>

</html>
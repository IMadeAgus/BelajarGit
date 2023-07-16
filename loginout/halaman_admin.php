<!DOCTYPE html>
<html>

<head>
    <title>Halaman admin - www.malasngoding.com</title>
</head>

<body>
    <?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:loginadmin.php?pesan=gagal");
	}

	?>

    <h1>Halaman Admin</h1>
    <!-- dibawah untuk memanggil name dari email dan level admin -->
    <p>Halo <b><?php echo $_SESSION['email']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.
    </p>
    <!-- persetujuan keluar atau tidak -->
    <a class="nav-link" href="logout.php" onclick="return confirm('Yakin mau Log Out?')">LOG
        OUT</a>

    <br />
    <br />
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <!-- Favicon-->
    <!-- <link rel="icon" type="image/x-icon" href="assets/favicon.ico" /> -->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/adminstyles.css" rel="stylesheet" />
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Feather Icons -->
    <script script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end text-white " style="background-color: #412496;" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom">
                BRAVO RENT CAR
            </div>
            <div class="list-group list-group-flush ">
                <a class="list-group-item list-group-item-action  text-white p-3" style="background-color: #412496;"
                    href="#!">Dashboard</a>
                <a class="list-group-item list-group-item-action  text-white p-3" style="background-color: #412496;"
                    href="Carlist/ShowCarList.php">CarList</a>
                <a class="list-group-item list-group-item-action  text-white  p-3" style="background-color: #412496;"
                    href="penyewa/tampilsewa.php">OrderList</a>
                <a class="list-group-item list-group-item-action  text-white p-3" style="background-color: #412496;"
                    href="#!">TransactionList</a>
<<<<<<< HEAD
                <a class="list-group-item list-group-item-action  text-white  p-3" style="background-color: #412496;"
                    href="#!">Profile</a>
                <a class="list-group-item list-group-item-action  text-white p-3" style="background-color: #412496;"
                    href="#!">Status</a>
=======
>>>>>>> 59fc6b9f254bccca7f8fdd234fac7c74625b97a6
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg border-bottom" style="background-color: #412496;">
                <div class="container-fluid">
                    <button class="btn text-white" id="sidebarToggle">
                        <span><i data-feather="toggle-left"></i></span>
                    </button>
                    <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span><i data-feather="list"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active  ">
                                <a class="nav-link text-white" href="#!">Home</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link text-white" href="../loginout/logout.php"
                                    onclick="return confirm('Yakin mau Log Out?')">LOG
                                    OUT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                <h1 class="mt-4">Dasboard</h1>
                <p>Welcome</p>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/adminscripts.js"></script>
    <script>
    feather.replace()
    </script>
</body>

</html>
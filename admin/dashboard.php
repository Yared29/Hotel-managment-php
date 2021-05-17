<?php  
 session_start();  
 if(!isset($_SESSION["user"]))  
 {  
      header("location:signin.php");  
 }  
 
 ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/bootstrap.min.css" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>

    <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>

    <?php
include('header.php');
?>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="dashboard.php">
                                <span data-feather="home"></span>
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="bookedRooms.php">
                                <span data-feather="file"></span>
                                Booked Rooms
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="availableRooms.php">
                                <span data-feather="shopping-cart"></span>
                                Available Rooms
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="roomList.php">
                                <span data-feather="users"></span>
                                Room List
                            </a>
                        </li>
                    </ul>

                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Admin Options</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <?php 
         if($_SESSION['user']['role'] == "Manager") { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="registerEmployee.php">
                                <span data-feather="file-text"></span>
                                Register Employee
                            </a>
                        </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link" href="listEmployees.php">
                                <span data-feather="file-text"></span>
                                List Employees
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="myProfile.php">
                                <span data-feather="file-text"></span>
                                My Profile
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="row featurette">
                    <div class="col-md-7 mt-5">
                        <h2 class="featurette-heading">PARADISE HOTEL. <span class="text-muted">It’ll blow your
                                mind.</span></h2>
                        <p class="lead">A Greate Place To Refresh Your Mind And Have Unimaginable Fun With Your Family.
                        </p>
                    </div>
                    <div class="col-md-5 mt-5">
                        <img src="../assets/logo.png" class="rounded" alt="Cinque Terre">

                    </div>
                </div>

                <div class="container py-3" id="custom-cards">
                    <h2 class="pb-2 border-bottom">Reservation Reports</h2>

                    <div class="row row-cols-3 align-items-stretch py-5">

                        <div class="col">
                            <div class="card card-cover h-60 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                                style="background-image: url('unsplash-photo-3.jpg');">
                                <div class="d-flex flex-column h-60 p-5 pb-3 text-shadow-1">
                                    <h2 class=" mb-5 display-8 lh-1 fw-bold">25 Rooms Are Booked Today</h2>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card card-cover h-60 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                                style="background-image: url('unsplash-photo-3.jpg');">
                                <div class="d-flex flex-column h-60 p-5 pb-3 text-shadow-1">
                                    <h2 class=" mb-4 display-8 lh-1 fw-bold">200 Rooms Are Booked In This Week</h2>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card card-cover h-60 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                                style="background-image: url('unsplash-photo-3.jpg');">
                                <div class="d-flex flex-column h-60 p-5 pb-3 text-shadow-1">
                                    <h2 class=" mb-4 display-8 lh-1 fw-bold">1000 Rooms Booked This Month</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container py-3" id="custom-cards">
                    <h2 class="pb-2 border-bottom">Employees Reports</h2>

                    <div class="row row-cols-3 align-items-stretch py-5">

                        <div class="col">
                            <div class="card card-cover h-60 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                                style="background-image: url('unsplash-photo-3.jpg');">
                                <div class="d-flex flex-column h-60 p-5 pb-3 text-shadow-1">
                                    <h2 class=" mb-5 display-8 lh-1 fw-bold">500 Total Employees</h2>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card card-cover h-60 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                                style="background-image: url('unsplash-photo-3.jpg');">
                                <div class="d-flex flex-column h-60 p-5 pb-3 text-shadow-1">
                                    <h2 class=" mb-4 display-8 lh-1 fw-bold">300 Female Employees</h2>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card card-cover h-60 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                                style="background-image: url('unsplash-photo-3.jpg');">
                                <div class="d-flex flex-column h-60 p-5 pb-3 text-shadow-1">
                                    <h2 class=" mb-4 display-8 lh-1 fw-bold">200 Male Employees</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>


    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
</body>

</html>
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
    <title>Room List</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">


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
    <?php  
 include("../config/db.php");
 $sql = "SELECT * FROM room WHERE roomType = 'Single'";
 $sql2 = "SELECT * FROM reservation WHERE room = 'Single'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $singleBedCount = mysqli_num_rows($result);
 ?>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="dashboard.php">
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
                            <a class="nav-link active" href="roomList.php">
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
                        <?php if($_SESSION['user']['role'] == "Manager") { ?>
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
                <section class="py-5 text-center container">
                    <div class="row py-lg-5">
                        <div class="col-lg-6 col-md-8 mx-auto">
                            <h1 class="fw-light">HOTEL PARADISE</h1>
                            <p class="lead text-muted">Rooms that are available in Hotel Paradise.</p>
                            <p>
                                <a href="addRoom.php" class="btn btn-primary my-2">Add Room</a>
                            </p>
                        </div>
                    </div>
                </section>

                <div class="container py-3" id="custom-cards">
                    <h2 class="pb-2 border-bottom">Rooms</h2>

                    <div class="row row-cols-3 align-items-stretch py-5">

                        <div class="card shadow-sm">
                            <img src="../assets/deluxeBed.jpg" class="rounded" alt="Cinque Terre">

                            <div class="card-body">
                                <p class="card-text">Deluxe - A room with bed that's clean and neat, a kitchen and
                                    living
                                    room is also included.</p>
                                <div class="d-flex justify-content-between align-items-center">

                                    <small class="text-muted">3000 Birr</small>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-sm">
                            <img src="../assets/familyBed.jpg" class="rounded" alt="Cinque Terre">

                            <div class="card-body">
                                <p class="card-text">Family - A room with 3 beds, a kitchen, a mini bar and living room,
                                    suitable
                                    for family.</p>
                                <div class="d-flex justify-content-between align-items-center">

                                    <small class="text-muted">2500 Birr</small>
                                </div>
                            </div>
                        </div>

                        <div class="card shadow-sm">
                            <img src="../assets/singleBed.jpg" class="rounded" alt="Cinque Terre">
                            <div class="card-body">
                                <p class="card-text">Single - A room with one bed and a beautiful view.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">1500 Birr</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container py-3" id="custom-cards">
                    <div class="row row-cols-3 align-items-stretch py-5">

                        <div class="card shadow-sm">
                            <img src="../assets/doubleBed.jpg" class="rounded" alt="Cinque Terre">
                            <div class="card-body">
                                <p class="card-text">Double - A room with 2 beds, a kitchen and a beautiful outside
                                    view.</p>
                                <div class="d-flex justify-content-between align-items-center">

                                    <small class="text-muted">2000 Birr</small>
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
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
    <title>Available Rooms</title>

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
    <link href="css/signin.css" rel="stylesheet">
</head>

<body>

    <?php
include('header.php');
?>

    <div class="container-fluid">
        <div class="row">
            <div class="hey">
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
                            <?php if($_SESSION['user']['role'] == "Manager") { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="registerEmployee.php">
                                    <span data-feather="file-text"></span>
                                    Register Admin
                                </a>
                            </li>
                            <?php } ?>
                            <li class="nav-item">
                                <a class="nav-link" href="listEmployees.php">
                                    <span data-feather="file-text"></span>
                                    List Admins
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

                <main class="form-signin">
                    <form action="services/addRoom.php" method="POST">
                        <img class="mb-4 align-self-center" src="../assets/logo.png" alt="" width="100" height="100">
                        <h1 class="h3 mb-3 fw-normal">Add Room</h1>
                        <div class="col-sm-12">
                            <label for="bed" class="form-label">Bed Type</label>
                            <select class="form-select" id="bed" required name="bedType">
                                <option value="">Choose...</option>
                                <option>Single</option>
                                <option>Family</option>
                                <option>Deluxe</option>
                                <option>Double</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid Room.
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="room" class="form-label">Room Type</label>
                            <select class="form-select" id="room" required name="roomType">
                                <option value="">Choose...</option>
                                <option>With Kitchen</option>
                                <option>Without Kitchen</option>
                                <option>With Livingroom</option>
                                <option>Without Livingroom</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid Bed.
                            </div>
                            <div class="col-sm-12 mt-3">
                                <label for="roomNumber" class="form-label">Room Number</label>
                                <input type="number" class="form-control" id="roomNumber" placeholder="" value=""
                                    required name="roomNumber">
                                <div class="invalid-feedback">
                                    Valid room number is required.
                                </div>
                            </div>
                            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit" name="addRoom">Add
                                Room</button>
                    </form>

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
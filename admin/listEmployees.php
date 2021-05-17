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
    <title>Employees</title>

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
                                Register Employees
                            </a>
                        </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="listEmployees.php">
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

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-3">
                <h2>Employees</h2>
                <div class="form-floating mt-4 mb-4">
                    <form class="d-flex" action="searchEmployee.php" method="POST">
                        <input class="form-control me-2" type="search" placeholder="Search by ID" aria-label="Search"
                            name="searchId">
                        <button class="btn btn-outline-success" type="submit" name="search">Search</button>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>ID.</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone Number</th>
                                <th>Role</th>
                                <?php if($_SESSION['user']['role'] == "Manager") { ?><th>Action</th> <?php }?>
                                <?php if($_SESSION['user']['role'] == "Manager") { ?><th>Action</th> <?php }?>
                                <?php if($_SESSION['user']['role'] == "Manager") { ?><th>Action</th> <?php }?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                  include ('../config/db.php');
									$tsql = "select * from hotel.user";
									$tre = mysqli_query($conn,$tsql);
									while($trow=mysqli_fetch_array($tre) )
									{	 
                     if($_SESSION['user']['role'] == "Manager") {
											echo"<tr>
												<th>".$trow['id']."</th>
												<th>".$trow['firstName']."</th>
												<th>".$trow['lastName']."</th>
												<th>".$trow['phone']."</th>
												<th>".$trow['role']."</th>
												<th><a href='employeeDetail.php?id=".$trow['id']." ' class='btn btn-primary'>View</a></th>
												<th><a href='editEmployee.php?id=".$trow['id']." ' class='btn btn-outline-secondary'>Edit</a></th>
                        <th><a href='services/deleteEmployee.php?id=".$trow['id']." ' class='btn btn-warning'>Delete</a></th>
                        </tr>";	
                     } else {
                      echo"<tr>
                      <th>".$trow['id']."</th>
                      <th>".$trow['firstName']."</th>
                      <th>".$trow['lastName']."</th>
                      <th>".$trow['phone']."</th>
                      <th>".$trow['role']."</th>
                      </tr>";	
                     }											
									}
									?>
                        </tbody>
                    </table>
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
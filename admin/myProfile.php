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
                                <a class="nav-link active" href="myProfile.php">
                                    <span data-feather="file-text"></span>
                                    My Profile
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <?php  
 if(!isset($_SESSION["user"]))  
 {  
      header("location:signin.php");  
 }  
 include("../config/db.php");
 $id = $_SESSION["user"]['id'];
 echo $id;
 $tsql = "select * from hotel.user where id = $id";
 $tre = mysqli_query($conn,$tsql);
 while($result=mysqli_fetch_array($tre) )
 {	 
         $id=$result['id'];
        $firstName=  $result['firstName'];
        $lastName=    $result['lastName'];
          $phone=  $result['phone'];
          $email=  $result['email'];
          $role=  $result['role'];		
          $sex=  $result['sex'];									
 }
 ?>

                <main class="form-signin">
                    <form action="services/authService.php" method="POST">
                        <img class="mb-4" src="../assets/bootstrap-logo.svg" alt="" width="72" height="57">
                        <h1 class="h3 mb-3 fw-normal">Edit Admin</h1>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" value="<?php echo $firstName ?>"
                                placeholder="John" name="firstName">
                            <label for="floatingInput">First Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" value="<?php echo $lastName ?>"
                                placeholder="Doe" name='lastName'>
                            <label for="floatingInput">Last Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" value="<?php echo $email ?>"
                                placeholder="name@example.com" name="email">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="floatingInput" value="<?php echo $phone ?>"
                                placeholder="0912235354" name="phone">
                            <label for="floatingInput">Phone number</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password"
                                name="password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="sex" class="form-label">Sex</label>
                            <select class="form-select" id="sex" required name="sex">
                                <option value=""><?php echo $sex ?></option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid sex.
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <label for="role" class="form-label">Select Role</label>
                            <select class="form-select" id="role" required name="role" value="<?php echo $role ?>">
                                <option><?php echo $role ?></option>
                                <option>Admin</option>
                                <option>Manager</option>
                                <option>Users</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid room.
                            </div>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit" name="editMyProfile">Edit
                            Profile</button>
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
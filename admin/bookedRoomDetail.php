<?php  
 session_start();  
 if(!isset($_SESSION["user"]))  
 {  
      header("location:signin.php");  
 }  
 
 ?>

<?php
		if(!isset($_GET["id"]))
		{	
			 header("location:bookedRooms.php");
		}
		else {
				$curdate=date("Y/m/d");
				include ('../config/db.php');
				$id = $_GET['id'];
				
				
				$sql ="Select * from reservation where id = '$id'";
				$re = mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($re))
				{
					$firstName = $row['firstName'];
					$lastName = $row['lastName'];
					$phone = $row['phone'];
					$email = $row['email'];
					$address = $row['address'];
					$country = $row['country'];
					$menu = $row['menu'];
					$bed = $row['bed'];
					$room = $row['room'];
					$approved = $row['approved'];
					$checkIn = $row['checkIn'];
					$checkOut = $row['checkOut'];
				}		
	}
			?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservation Detail</title>

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
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-3">
                <div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th>DESCRIPTION</th>
                                        <th>INFORMATION</th>

                                    </tr>
                                    <tr>
                                        <th>First Name</th>
                                        <th><?php echo $firstName; ?> </th>

                                    </tr>
                                    <tr>
                                        <th>Last Name</th>
                                        <th><?php echo $lastName; ?> </th>

                                    </tr>
                                    <tr>
                                        <th>Phone </th>
                                        <th><?php echo $phone; ?></th>

                                    </tr>
                                    <tr>
                                        <th>Email </th>
                                        <th><?php echo $email;  ?></th>

                                    </tr>
                                    <tr>
                                        <th>Address </th>
                                        <th><?php echo $address; ?></th>

                                    </tr>
                                    <tr>
                                        <th>Country </th>
                                        <th><?php echo $country; ?></th>

                                    </tr>
                                    <tr>
                                        <th>Menu </th>
                                        <th><?php echo $menu; ?></th>

                                    </tr>
                                    <tr>
                                        <th>Bedding </th>
                                        <th><?php echo $bed; ?></th>

                                    </tr>
                                    <tr>
                                        <th>Room </th>
                                        <th><?php echo $room; ?></th>

                                    </tr>
                                    <tr>
                                        <th>Check-in Date </th>
                                        <th><?php echo $checkIn; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Check-out Date</th>
                                        <th><?php echo $checkOut; ?></th>
                                    </tr>
                                    <tr>
                                        <th>Approved</th>
                                        <th><?php echo $approved; ?></th>
                                    </tr>
                                    <?php 
                                        echo "
                                        <th><a href='services/disapproveBook.php?id=".$id." ' class='btn btn-outline-secondary'>DisApprove</a></th>
                                        <th><a href='services/deleteBookedRoom.php?id=".$id." ' class='btn btn-warning'>Delete</a></th>";
                                    ?>

                                </table>
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
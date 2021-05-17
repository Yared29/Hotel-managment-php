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
  </head>
  <body>
    
  <?php
include('header.php');
?>

<?php  
 include("../config/db.php");
    $singleSql = "SELECT * FROM hotel.room WHERE bedType = 'Single'";
    $singleAvaSql = "SELECT * FROM hotel.reservation WHERE bed = 'Single'";
    $singleResult = mysqli_query($conn,$singleSql);
    $singleAvaResult = mysqli_query($conn,$singleAvaSql);
    $singleRow = mysqli_fetch_array($singleResult,MYSQLI_ASSOC);
    $singleAvaRow = mysqli_fetch_array($singleAvaResult,MYSQLI_ASSOC);
    $singleCount = mysqli_num_rows($singleResult);
    $singleAvaCount = mysqli_num_rows($singleAvaResult);
    $singleBed = $singleCount - $singleAvaCount;

    $doubleSql = "SELECT * FROM hotel.room WHERE bedType = 'Double'";
    $doubleAvaSql = "SELECT * FROM hotel.reservation WHERE bed = 'Double'";
    $doubleResult = mysqli_query($conn,$doubleSql);
    $doubleAvaResult = mysqli_query($conn,$doubleAvaSql);
    $doubleRow = mysqli_fetch_array($doubleResult,MYSQLI_ASSOC);
    $doubleAvaRow = mysqli_fetch_array($doubleAvaResult,MYSQLI_ASSOC);
    $doubleCount = mysqli_num_rows($doubleResult);
    $doubleAvaCount = mysqli_num_rows($doubleAvaResult);
    $doubleBed = $doubleCount - $doubleAvaCount;

    $deluxeSql = "SELECT * FROM hotel.room WHERE bedType = 'Deluxe'";
    $deluxeAvaSql = "SELECT * FROM hotel.reservation WHERE bed = 'Deluxe'";
    $deluxeResult = mysqli_query($conn,$deluxeSql);
    $deluxeAvaResult = mysqli_query($conn,$deluxeAvaSql);
    $deluxeRow = mysqli_fetch_array($deluxeResult,MYSQLI_ASSOC);
    $deluxeAvaRow = mysqli_fetch_array($deluxeAvaResult,MYSQLI_ASSOC);
    $deluxeCount = mysqli_num_rows($deluxeResult);
    $deluxeAvaCount = mysqli_num_rows($deluxeAvaResult);
    $deluxeBed = $deluxeCount - $deluxeAvaCount;

    $familySql = "SELECT * FROM hotel.room WHERE bedType = 'Family'";
    $familyAvaSql = "SELECT * FROM hotel.reservation WHERE bed = 'Family'";
    $familyResult = mysqli_query($conn,$familySql);
    $familyAvaResult = mysqli_query($conn,$familyAvaSql);
    $familyRow = mysqli_fetch_array($familyResult,MYSQLI_ASSOC);
    $familyAvaRow = mysqli_fetch_array($familyAvaResult,MYSQLI_ASSOC);
    $familyCount = mysqli_num_rows($familyResult);
    $familyAvaCount = mysqli_num_rows($familyAvaResult);
    $familyBed = $familyCount - $familyAvaCount;

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
            <a class="nav-link active" href="availableRooms.php">
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

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
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

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="container py-3" id="custom-cards">
        <h2 class="pb-2 border-bottom">Available Rooms</h2>
      
        <div class="row row-cols-3 align-items-stretch py-5">

            <div class="col">
                <div class="card card-cover h-60 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
                  <div class="d-flex flex-column h-60 p-5 pb-3 text-shadow-1">
                    <h2 class=" mb-5 display-8 lh-1 fw-bold"><?php echo $deluxeBed?> Deluxe Rooms Are Availabele</h2>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card card-cover h-60 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
                  <div class="d-flex flex-column h-60 p-5 pb-3 text-shadow-1">
                    <h2 class=" mb-4 display-8 lh-1 fw-bold"><?php echo $familyBed?> Family Rooms Are Availabele</h2>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card card-cover h-60 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
                  <div class="d-flex flex-column h-60 p-5 pb-3 text-shadow-1">
                    <h2 class=" mb-4 display-8 lh-1 fw-bold"><?php echo $doubleBed?> Double Rooms Are Availabele</h2>
                  </div>
                </div>
              </div>

          <div class="col">
            <div class="card card-cover h-60 overflow-hidden text-white bg-dark rounded-5 shadow-lg mt-4" style="background-image: url('unsplash-photo-3.jpg');">
              <div class="d-flex flex-column h-60 p-5 pb-3 text-shadow-1">
                <h2 class=" mb-4 display-8 lh-1 fw-bold"><?php echo $singleBed?> Single Rooms Are Availabele</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>


    <script src="../assets/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

<?php
    session_start();
 if(!isset($_SESSION["user"]))  
 {  
      header("location: ../signin.php");  
 }  
 
 include("../../config/db.php");

 $id = $_GET['id'];
 $tsql = "DELETE FROM `reservation` WHERE `reservation`.`id` = $id";
 if(mysqli_query($conn,$tsql) == true)
 { 
   session_start();
   $_SESSION['alertMsg'] = 'Reservation Deleted Successful';
   $_SESSION['alert_type'] = 'success';
     echo "<script type='text/javascript'>alert('Deletion Successful')</script>";
    mysqli_close($conn);
    header("location: ../bookedRooms.php");									
 } else {
    echo "<script type='text/javascript'>alert('Error Deleting User')</script>";
    header("location: ../index.php");
    }
 
 ?>
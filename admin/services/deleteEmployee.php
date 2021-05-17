<?php
    session_start();
 if(!isset($_SESSION["user"]))  
 {  
      header("location: ../signin.php");  
 }  
 
 include("../../config/db.php");

 $id = $_GET['id'];
 $tsql = "DELETE FROM `user` WHERE `user`.`id` = $id";
 if(mysqli_query($conn,$tsql) == true)
 { 
     echo "<script type='text/javascript'>alert('Deletion Successful')</script>";
    mysqli_close($conn);
    header("location: ../listEmployees.php");									
 } else {
    echo "<script type='text/javascript'>alert('Error Deleting User')</script>";
    header("location: ../index.php");
    }
 
 ?>
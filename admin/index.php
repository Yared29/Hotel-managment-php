<?php  
session_start();  
echo $_SESSION["user"];
if(isset($_SESSION["user"]))
{
 header("location: dashboard.php");
} else {
 header("location: signin.php");
}
 ?>
 
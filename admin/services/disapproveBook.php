<?php
require('../../config/db.php');

	$id = $_GET['id'];
	$sql = "UPDATE reservation SET approved = FALSE WHERE reservation.id = $id";
  if ($conn->query($sql) === TRUE) {
echo "<script type='text/javascript'>alert('Edit Successful')</script>";
mysqli_close($conn);
header("location: ../bookedRooms.php");
} else {
echo "<script type='text/javascript'>alert('Error Editing User')</script>";
header("location: ../bookedRooms.php");
}

?>
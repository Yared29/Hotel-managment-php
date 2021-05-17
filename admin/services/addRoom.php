<?php
$conn = mysqli_connect('localhost', 'root', '', 'hotel');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['addRoom']))
{
	$roomType=$_POST['roomType'];
	$bedType=$_POST['bedType'];
	$roomNumber=$_POST['roomNumber'];
	
	$sql="insert into hotel.room (roomType, bedType, roomNumber) values ('$roomType','$bedType','$roomNumber')";
	if ($conn->query($sql) === TRUE) {
echo "<script type='text/javascript'>alert('Room Successfully Added')</script>";
mysqli_close($conn);
header("location: ../addRoom.php");
} else {
echo "<script type='text/javascript'>alert('Error Adding Room')</script>";
header("location: ../addRoom.php");
}
}

?>
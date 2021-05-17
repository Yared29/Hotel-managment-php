<?php
$conn = mysqli_connect('localhost', 'root', '', 'hotel');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['reserve']))
{
	$firstName=mysqli_real_escape_string($conn,$_POST['firstName']);
	$lastName=mysqli_real_escape_string($conn,$_POST['lastName']);
	$phone=mysqli_real_escape_string($conn,$_POST['phone']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
    $roomType=mysqli_real_escape_string($conn,$_POST['roomType']);
	$bedType=mysqli_real_escape_string($conn,$_POST['bedType']);
	$menu=mysqli_real_escape_string($conn,$_POST['menu']);
	$address=mysqli_real_escape_string($conn,$_POST['address']);
	$country=mysqli_real_escape_string($conn,$_POST['country']);
	$checkIn=mysqli_real_escape_string($conn,$_POST['checkIn']);
	$checkOut=mysqli_real_escape_string($conn,$_POST['checkOut']);
	$sql="insert into hotel.reservation (firstName, lastName, email, phone, room, bed, menu, address, country, checkIn, checkOut) values ('$firstName','$lastName','$email','$phone','$roomType','$bedType', '$menu', '$address', '$country', '$checkIn', '$checkOut')";

	if ($conn->query($sql) === TRUE) {
        mysqli_close($conn);
echo "<script type='text/javascript'>alert('Room Reserverd Successful')</script>";
session_start();
$_SESSION['alertMsg'] = 'Room Reserverd Successful';
$_SESSION['alert_type'] = 'success';
header("location: ../client/reserveRoom.php");
} else {    
echo "<script type='text/javascript'>alert('Error reserving room')</script>";
header("location: ../client/reserveRoom.php");
}
}

?>
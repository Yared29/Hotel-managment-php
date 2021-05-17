<?php
$conn = mysqli_connect('localhost', 'root', '', 'hotel');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['register']))
{
	$firstName=$_POST['firstName'];
	$lastName=$_POST['lastName'];
	$phone=$_POST['phone'];
  $sex=$_POST['sex'];
	$email=$_POST['email'];
	$role=$_POST['role'];
	$password=$_POST['password'];
  $encPass = crypt($password, "secret");
	$sql="insert into hotel.user (firstName, lastName, email, phone, role, sex, password) values ('$firstName','$lastName','$email','$phone','$role', '$sex', '$encPass')";
	if ($conn->query($sql) === TRUE) {
echo "<script type='text/javascript'>alert('Registration Successful')</script>";
mysqli_close($conn);
header("location: ../registerEmployee.php");
} else {
echo "<script type='text/javascript'>alert('User Exists')</script>";
}
}

if(isset($_POST['signin'])) {
    session_start();  
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password =  crypt(mysqli_real_escape_string($conn, $_POST['password']), "secret");; 
    echo $password;
    $sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1) {
    $_SESSION["user"] = $row;
    header("location: ../dashboard.php");
    }else {
    echo '<script>alert("Your Login Name or Password is invalid") </script>';
    header("location: ../signin.php");
    }
}

if(isset($_POST['editMyProfile']))
{session_start();
	$firstName=$_POST['firstName'];
  $id=$_SESSION["user"]['id'];
	$lastName=$_POST['lastName'];
	$phone=$_POST['phone'];
  $sex=$_POST['sex'];
	$email=$_POST['email'];
	$role=$_POST['role'];
	$password=$_POST['password'];
  $encPass = crypt($password, "secret");
	$sql="UPDATE hotel.user SET firstName = '$firstName', lastName = '$lastName', sex = $sex , email = '$email', phone = '$phone', role = '$role' , password = '$encPass' WHERE hotel.user.id = $id";
	
  if ($conn->query($sql) === TRUE) {
echo "<script type='text/javascript'>alert('Edit Successful')</script>";
mysqli_close($conn);
header("location: ../registerEmployee.php");
} else {
echo "<script type='text/javascript'>alert('Error Editing User')</script>";
}
}
if(isset($_POST['editEmployee']))
{session_start();
	$firstName=$_POST['firstName'];
  $id=$_SESSION["editId"];
	$lastName=$_POST['lastName'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
  $sex=$_POST['sex'];
	$role=$_POST['role'];
	$password=$_POST['password'];
  $encPass = crypt($password, "secret");
	$sql="UPDATE hotel.user SET firstName = '$firstName', lastName = '$lastName', sex = '$sex' , email = '$email', phone = '$phone', role = '$role' , password = '$encPass' WHERE hotel.user.id = $id";
	
  if ($conn->query($sql) === TRUE) {
echo "<script type='text/javascript'>alert('Edit Successful')</script>";
mysqli_close($conn);
unset($_SESSION["editId"]);
header("location: ../listEmployees.php");
} else {

echo "<script type='text/javascript'>alert('Error Editing User')</script>";  unset($_SESSION["editId"]);
header("location: ../listEmployees.php");
}
}
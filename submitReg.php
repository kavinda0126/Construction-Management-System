<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="cms";

$conn = mysqli_connect($servername, $username, $password,$db);

if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


	$Username=$_POST["name"];
	$Gender=$_POST["gender"];
	$eorc=$_POST["EorC"];
	$Phone=$_POST["mobile"];
	$Email=$_POST["email"];
	$Pass=$_POST["password"];
	
	$sql="INSERT INTO user(Uname, Gender, EorC, Phone, Email, Password)values('$Username','$Gender','$eorc','$Phone','$Email',
	'$Pass')";
	
	if(mysqli_query($conn,$sql)){
		echo"<script>alert('Details inserted Successfully')</script>";
	}
	else{
		echo"<script>alert('Error')</script>";
	}
	
	header("Location: Reg.php");
	exit;
	
	mysqli_close($conn);
?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","simplelogin");
$query="SELECT * FROM user where username='$username' and password='$password'";
$res=mysqli_query($con,$query);
$rows = mysqli_num_rows($res);
session_start();
 if($rows==1){
 	header('location:home.php');
 	$_SESSION['username']=$username;
 }
else{
	echo "INVALID USERNAME AND PASSWORD";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="formbox">
		<h2>Login</h2>
		<form method="POST" action="index.php">
			<input type="text" name="username" placeholder="Enter your username">
			<input type="password" name="password" placeholder="Enter your password">
			<input type="submit" value="LOGIN">   
		
		</form>
	</div><!--end of formbox-->
</body>
</html>
<?php
session_start();
$uname=$_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<div class="header">
		<ul>
			<li><a href="#">Profile</a></li>
			<li><a href="#">Settings</a></li>
		</ul>

		<div class="user_info">
			Logged in as <?php echo "$uname"; ?>
			<a href="logout.php">Logout</a>
	       </div>
	</div>
	
</body>
</html>
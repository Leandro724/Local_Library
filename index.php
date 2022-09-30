<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Local Library</title>
	<link rel="stylesheet" href="CSS/stylesheet.css">
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>Dashboard</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>
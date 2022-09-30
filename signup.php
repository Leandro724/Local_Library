<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	  <!-- Linking in the stylesheet -->
	  <link rel="stylesheet" href="CSS/stylesheet.css">
</head>
<body>

	<h1>Local Library</h1>

<div class="forms">
	
	  <!-- Login form for each user -->
	  <form  method="post" enctype="multipart/form-data" autocomplete="on">
		<h1>Member SignUp</h1>
		
		<label>Email</label>
		<input class="inputField" id="text" type="text" name="user_name"><br><br>

		<label>Create Password</label>
		<input class="inputField" id="text" type="password" name="password"><br><br>

		<input class="button" id="button" type="submit" value="Signup"><br><br>

		<a href="login.php">Click to Login</a><br><br>

	
	
	</form>
</div>
</body>
</html>
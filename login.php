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

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	 <!-- Linking in the stylesheet -->
	 <link rel="stylesheet" href="CSS/stylesheet.css">
</head>
<body>

	<h1>Local Library</h1>

<div class="forms">
	
	<form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<h1>Members Login</h1>
		
		<label>Email</label>
		<input class="inputField" id="text" type="text" name="user_name"><br><br>

		<label>Password</label>
		<input class="inputField" id="text" type="password" name="password"><br><br>

		<input class="button" id="button" type="submit" value="Login"><br><br>

		<a href="signup.php">Click to Signup</a><br><br>
	</form>
</div>
</body>
</html>
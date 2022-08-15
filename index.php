<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
      <!-- Linking in the stylesheet -->
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

	<h1 class="forms">Local Library</h1>

	<div class="forms">
		  <!-- Login form for each user -->
		  <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<h1>Librarian Login</h1>
		
		<label>Email</label>
		<input class="inputField" type="text" name="Email" required>

		<label>Password</label>
		<input class="inputField" type="text" name="Password" required>

		<button class="button" type="submit" name="submit">Log in</button>

		<p class="error"><?php echo @$user->error ?></p>
		<p class="success"><?php echo @$user->success ?></p>
		
	</form>

    <form action="" method="post" enctype="multipart/form-data" autocomplete="off">
		<h1>Members Login</h1>
		
		<label>Email</label>
		<input class="inputField" type="text" name="Email" required>

		<label>Password</label>
		<input class="inputField" type="text" name="Password" required>

		<button class="button" type="submit" name="submit">Log in</button>

		<p>Forgot password? <a href="SignUp.php">Click Here.</a></p>
		<p>Not a member? <a href="SignUp.php">Register Here.</a></p>

	</form>
	</div>
  
   
</body>
</html>
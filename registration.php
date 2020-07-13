<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
	<?php
include ('includes/nav.php');
	?>
	<section id="credentials">
	<div class="dark">
				
			<h2>Register</h2>
			
		</div>
		<form action="registration.php" method="post">
			<label><a href="registration.php"></a></label><br>
		<div>
			<label for="User Name">Name</label><br>
			<input type="text" name="name" required><br>
		</div>	

<div>
			<label for="Registration Number">Registration Number </label><br>
			<input type="text" name="reg" required>
			<br>
		</div>	

<div>
			<label for="CUK Student Email">Email address</label><br>
			<input type="text" name="email" required><br>
		</div>	
	
<div>
			<label for="Password">Password</label><br>
			<input type="Password" name="Password_1" required><br>
		</div>	
<div>
			<label for="Password">Confirm Password</label><br>
			<input type="Password" name="Password_2" required><br>
		</div>	
		<br> <button class="button_1"type="Register_user" name="Register">Register</button>
		

		<p>
      Already a member? <a href="login.html">Login</a>
      <br>
       </p>
		</form>
		
	</div>
</section>
</body>
</html>
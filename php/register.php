<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration Form</title>
	<link rel="stylesheet" type="text/css" href="../css/phpstyle.css">
</head>
<body>
	<div id="header">
			<a href="../index.html">
			<div id="logoname">
				<h1>KOUNSELLOR</h1>
			</div>
			<div id="logo">
				<img src="../images/logo.png" alt="KounsellorLogo" height="80px">
			</div>
			</a>
	</div>

	<div class="headerreg">
		<h1>Register</h1>
	</div>

	<form method="post" action="register.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<input type="password" name="password_1" placeholder="Password">
		</div>
		<div class="input-group">
			<input type="password" name="password_2" placeholder="Confirm Password">
		</div>
		<center>
		<div class="input-group">
			<a href="login.php"><button type="submit" name="register" class="btn">Register</button></a>
		</div>
		<p>
			<a href="login.php">Already a member? Sign in</a>
		</p>
	</center>
	</form>
</body>
</html>
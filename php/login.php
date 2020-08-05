<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
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

	<div class="headerlog">
		<h1>Login</h1>
	</div>

	<form method="post" action="login.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<input type="text" name="username" placeholder="Username">
		</div>
		<div class="input-group">
			<input type="password" name="password" placeholder="Password">
		</div>
		<center>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Sign In</button>
		</div>
		<p>
			<a href="register.php">Not a member yet? Create account</a>
		</p>
		</center>
	</form>
</body>
</html>
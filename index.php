<!DOCTYPE html>
<html>
<head>
	<title>WebChat</title>
	<link rel="stylesheet" type="text/css" href="stylechat.css">
</head>
<body>
<div id="main">
	<div id="info">
		<h2>
			Login here
		</h2>
		<form action="login.php" method="post"></form>
		<label><b>Username:</b></label>
		<input type="text" name="uname" placeholder="Username"><br><br>
		<label><b>Password:</b></label>
		<input type="text" name="pass" placeholder="Password"><br><br>
		<button style="background-color: #6495ed;color:white" type="submit"><b>Login</b></button>

		<form action="signup.php"></form>
		<h2>Dont have  an account sign up here</h2>
		<label>Username:</label>
		<input type="text" name="uname" placeholder="Username"><br><br>

		<label>Email Add:</label>
		<input type="text" name="Email" placeholder="Email"><br><br>

		<label>Password:</label>
		<input type="text" name="pass" placeholder="Password"><br><br>

		<button style="background-color: #6495ed;color:white" type="submit"><b>Signup</b></button>

	</div>
	

</div>
</body>
</html>
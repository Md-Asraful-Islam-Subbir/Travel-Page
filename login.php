<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
	<title>Login Form</title>
</head>
<body>
	<h2>Login Form</h2>
	<form method="POST" action="db_con.php">
		<label>Email:</label>
		<input type="text" name="email" required><br><br>
		<label>Password:</label>
		<input type="password" name="password" required><br><br>
		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>

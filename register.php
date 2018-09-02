<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="theme-color" content="#000000">
		<meta name="description" content="">
		<link rel="apple-touch-icon" href="">
		<link rel="icon" type="image/png" href="">
		<title></title>
	</head>
	<body>
		<div id="input_container">
			<form action="register.php" id="loginForm" method="POST">
				<h2>Login to your account</h2>
				<p>
					<label for="loginUsername">Username</label>
					<input type="text" id="loginUsername" name="loginUsername" placeholder="e.g. DaBrown18" required>
				</p>
				<p>
					<label for="loginPassword">Password</label>
					<input type="password" id="loginPassword" name="loginPassword" required>
				</p>
				<button type="submit" name="loginButton">LOG IN</button>
			</form>
		</div>
	</body>
</html>
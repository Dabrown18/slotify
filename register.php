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
					<input type="password" id="loginPassword" name="loginPassword" placeholder="Your password" required>
				</p>
				<button type="submit" name="loginButton">LOG IN</button>
			</form>

			<form action="register.php" id="loginForm" method="POST">
				<h2>Create your free account</h2>
				<p>
					<label for="username">Username</label>
					<input type="text" id="username" name="username" placeholder="e.g. DaBrown18" required>
				</p>

				<p>
					<label for="firstName">First name</label>
					<input type="firstName" id="firstName" name="username" placeholder="e.g. Darron" required>
				</p>

				<p>
					<label for="lastName">Last name</label>
					<input type="lastName" id="lastName" name="username" placeholder="e.g. Brown" required>
				</p>

				<p>
					<label for="email">Email</label>
					<input type="email" id="email" name="username" placeholder="e.g. DaBrown18@email.com" required>
				</p>

				<p>
					<label for="email2">Confirm Email</label>
					<input type="email2" id="email2" name="username" placeholder="e.g. DaBrown18@email.com" required>
				</p>

				<p>
					<label for="password">Password</label>
					<input type="password" id="password" name="loginPassword" placeholder="Your password" required>
				</p>

				<p>
					<label for="password2">Confirm password</label>
					<input type="password2" id="password2" name="loginPassword" placeholder="Your password" required>
				</p>
				<button type="submit" name="registrationButton">SIGN UP</button>
			</form>
		</div>
	</body>
</html>
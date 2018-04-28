
<?php 

if(isset($_POST['loginButton'])){
	// login Button was pressed

}

if(isset($_POST['registerButton'])){
	// register Button was pressed

}

?>

<html>
<head>
	<title>Welcome to Slotify!</title>
</head>
<body>

	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" name="loginPassword" type="password" required>
			</p>

			<button type="submit" name="loginButton">LOG IN</button>
			
		</form>

        <form id="registerForm" action="register.php" method="POST">
			<h2>Create your Free account</h2>
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="e.g. bartSimpson" required>
			</p>

             <p>
				<label for="firstname">First name</label>
				<input id="firstname" name="firstname" type="text" placeholder="e.g. bart" required>
			</p>

			<p>
				<label for="lastname">last name</label>
				<input id="lastname" name="lastname" type="text" placeholder="e.g. Simpson" required>
			</p>

			<p>
				<label for="email">Email</label>
				<input id="email" name="email" type="text" placeholder="e.g. bartS@gmail.com" required>
			</p>

			<p>
				<label for="email2">Confirm Email</label>
				<input id="email2" name="email2" type="text" placeholder="e.g. bartS@gmail.com" required>
			</p>

			<p>
				<label for="passwordassword">Password</label>
				<input id="passwordassword" name="password" type="password" placeholder="Your passsword" required>
			</p>

			<p>
				<label for="password2">Confirm Password</label>
				<input id="password2" name="password2" type="password" placeholder="Your passsword" required>
			</p>

			<button type="submit" name="registerButton">SignUp</button>
			
		</form>

	</div>

</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"]=="POST") {

	$input_username = $_POST['username'];
	$input_password = $_POST['password'];

	$validUsername = "123";
	$validPassword = "123";

	$baboUsername = "babo";
	$baboPassword = "babo";

	if($input_username == $validUsername && $input_password == $validPassword) {
		setcookie("user", "grape_bs",time() + 3600,"/");
		header("Location: page-grape.php");
		exit();
	} else if($input_username == $baboUsername && $input_password == $baboPassword) {
		setcookie("user", "babo_dg",time() + 3600,"/");
		header("Location: page-babo.php");
		exit();
	} 
	else {
		$errorMessage = "Invalid username or password";
	}
	
}
?>

<html>
	<head>
		<style>
			body {
				font-family: Arial, sans-serif;
				margin: 0;
				padding: 0;
				box-sizing: border-box;
				background-color: #f4f4f4;
			}	
			header {
				background-color: #DE628B;
				color: #fff;
				text-align: center;
				padding: 10px;
			}
			main {
				padding: 20px;
				margin-bottom: 80px;
			}
			form {
				max-width: 400px;
				margin: 0 auto;
				background-color: #fff;
				padding: 20px;
				border-radius: 8px;
				box-shadow: 0 0 15px rgba(0,0,0,0.1);
			}
			label {
				display: block;
				margin-bottom: 8px;
				font-weight: bold;
			}
			input {
				width: 100%;
				padding: 12px;
				margin-bottom: 20px;
				border: 1px solid #ccc;
				border-radius: 4px;
				box-sizing: border-box;
			}
			input[type="submit"] {
				background-color: #DE628B;
				color: #fff;
				cursor: pointer;
				padding: 12px;
				border: none;
				border-radius: 4px;
		        box-sizing: border-box;
			}
			input[type="submit"]:hover {
				background-color: #555;
			}
			footer, nav {
				background-color: #DE628B;
				color: #fff;
				text-align: center;
				padding: 10px;
				position: fixed;
				bottom: 0;
				width: 100%;
			}
		
			nav a {
				color: #fff;
				text-decoration: none;
				margin: 0 10px;
			}
		</style>
	</head>
	<body>
		<header>
			<h1> Cat Naver </h1>
		</header>
		<form method="post">
			<h2>Login</h2>
			<?php
				if(isset($errorMessage)) {
					echo '<p style="color: red;">' . $errorMessage.'</p>';
				}
			?>
			<label for="username">username</label>
			<input name="username" type="text">
			<label for="password">password</label>
			<input name="password" type="password">
			<input type="submit" value="login">
		</form>
		<a href="/login-success.html">개인페이지로 이동<a>
		<footer>
			<p>&copy; This is Cat Webpage. All rights reserved. </p>
		</footer>
	</body>
</html>

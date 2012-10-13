<?php

session_start();




if (isset($_POST['login']) && isset($_POST['password']))
{
	$_SESSION['login'] = $_POST['login'];
	$_SESSION['password'] = $_POST['password'];
	
	header( 'Location: projects.php' ) ;
	
}



echo '
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
	</head>
	<body>
		<div class="container">
			<form action="index.php" method="post">
			  <label>Login</label>
			  <input type="text" name="login"/>

			  <label>Password</label>
				<input type="password" name="password"/>

			  <button type="submit" class="btn">Submit</button>
			</form>
		<div>
	</body>
</html>
';
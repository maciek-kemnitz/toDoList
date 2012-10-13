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
	<div class="navbar navbar-inverse navbar-fixed-top">
	    <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </a>
                <a class="brand" href="#">Basecamp todos</a>
                <div class="nav-collapse collapse">
                    <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
	</div>

	<div class="container">
        <div class="row">
            <div class="span4">
			    <form action="index.php" method="post">
			    <legend>Log in!</legend>
			    <label>Login</label>
			    <input type="text" name="login" placeholder="login"/>
                <label>Password</label>
				<input type="password" name="password" placeholder="password"/>
                <button type="submit" class="btn">Submit</button>
			    </form>
			</div>
			<div class="span4">
  <form action="index.php" method="post">
			    <legend>Log in!</legend>
			    <label>Login</label>
			    <input type="text" name="login" placeholder="login"/>
                <label>Password</label>
				<input type="password" name="password" placeholder="password"/>
                <button type="submit" class="btn">Submit</button>
			    </form>
			</div>


		</div>
		</div>
	</body>
</html>
';
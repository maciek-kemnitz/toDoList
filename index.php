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
	<div class="navbar navbar-inverse ">
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
            <div class="span3">
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
                <h1>Why?</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sagittis rhoncus leo sit amet interdum. Fusce sit amet euismod nulla.
                   Nam elementum felis quis elit sagittis accumsan. Maecenas luctus purus ac libero placerat ut egestas velit sagittis. Praesent porta elit nec
                   nunc luctus eleifend. Praesent lacinia ipsum quis mauris pellentesque a semper nulla iaculis. Etiam non tellus nisi. Duis mollis faucibus placerat.
                   Quisque nec porttitor augue. In id elit dui. Etiam aliquet scelerisque arcu vel aliquet. Donec urna quam, auctor sit amet dictum non, pharetra semper orci.
                   Cras semper pharetra mauris. Curabitur eu quam nibh.
                </p>
			</div>


		</div>
		</div>

	</body>
</html>
';
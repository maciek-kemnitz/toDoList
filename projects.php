<?php

include_once 'curlConnection.php';

session_start();

$data = getFromApi($_SESSION['login'], $_SESSION['password'], "projects.json");

echo '
	
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
		<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	</head>
	<body>
		<div>
			<div class="accordion" id="accordionProjects">
';

foreach($data as $key => $project)
{
	echo '
			<div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionProjects" href="#collapse'. $key .'">
						Collapsible Group Item #1
					</a>
				</div>
				<div id="collapse'. $key .'" class="accordion-body collapse">
					<div class="accordion-inner">
						Anim pariatur cliche...
					</div>
				</div>
			</div>
		
  
	';
}

echo '
		</div>
	</div>
	</body>
	</html>
';


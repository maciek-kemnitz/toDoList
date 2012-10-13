<?php


function getFromApi($user, $passsword)
{

	$c = curl_init();
	curl_setopt_array($c, array (
	  CURLOPT_URL => 'https://basecamp.com/1758651/api/v1/projects.json',
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_USERPWD => 'maciek.kemnitz:tiGGer987g',

	  //CURLOPT_POSTFIELDS => json_encode(array("name" => "myproject")),
	  CURLOPT_CUSTOMREQUEST => "GET",
	  CURLOPT_HTTPHEADER => array (
		'User-Agent: Test (test@example.com)',
		'Content-Type: application/json',
	  ),
	));


	$data = curl_exec($c);
	$data = json_decode($data, true);
	print_r($data);
}

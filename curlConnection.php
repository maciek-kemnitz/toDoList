<?php


function getFromApi($user, $passsword, $url)
{

	$c = curl_init();
	curl_setopt_array($c, array (
	  CURLOPT_URL => 'https://basecamp.com/1758651/api/v1/'. $url,
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_USERPWD => $user . ':' . $passsword,

	  //CURLOPT_POSTFIELDS => json_encode(array("name" => "myproject")),
	  CURLOPT_CUSTOMREQUEST => "GET",
	  CURLOPT_HTTPHEADER => array (
		'User-Agent: Test (test@example.com)',
		'Content-Type: application/json',
	  ),
	));


	$data = curl_exec($c);
	$data = json_decode($data, true);
	return $data;
}

<?php
	//Deklarasi Variabel
$host = 'fdb24.your-hosting.net';
$user = '3207337_rsud';
$pass = '123456789abc@';

$db = '3207337_rsud';

	//Deklarasi Connection 
$link = mysqli_connect($host, $user, $pass, $db);

if (!$link) {
	die("Connection failed: " . mysqli_connect_error());
}

//echo "Connected successfully RSUD Curup";

?>
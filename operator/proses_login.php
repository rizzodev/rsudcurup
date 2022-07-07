<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is invalid";
		echo $error;
		echo '<script language="javascript">';
		echo 'alert("Data Tidak Lengkap, Mohon Isi Data Secara Lengkap dan Benar !"); location.href=history.go(-1)';
		echo '</script>';

	}
	else
	{
// Define $username and $password
		$username=$_POST['username'];
		$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysqli_connect('fdb24.your-hosting.net', '3207337_rsud', '123456789abc@', '3207337_rsud');
// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($connection,$username);
		$password = mysqli_real_escape_string($connection,$password);

// SQL query to fetch information of registerd users and finds user match.
		$query = mysqli_query($connection,"select * from login where password='$password' AND username='$username'");
		$rows = mysqli_num_rows($query);
		if ($rows == 1) {
			$_SESSION['login_user']=$username; // Initializing Session
			header("location: index.php"); // Redirecting To Other Page
		} else {
			$error = "Username or Password is invalid";
			echo $error;
			echo $error;
		echo '<script language="javascript">';
		echo 'alert("Data Username Password Salah !"); location.href=history.go(-1)';
		echo '</script>';
		}
	mysqli_close($connection); // Closing Connection
}
} 

?>
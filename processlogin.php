<?php
$servername = 'localhost';
$dbname = 'users';
$username = 'root';
$password = '';
$loginuser = $_POST['username'];
$loginpwd = $_POST['password'];
echo("user $loginuser is logging in with password $loginpwd <br>");
$mysqli_con = new mysqli($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
	die("Failed to connect to database");
} else {
	$sql = "SELECT * FROM users WHERE username ='$loginuser' and password='$loginpwd'";
	$result = $mysqli_con -> query($sql);
	if ($result -> num_rows > 0) {
		echo("$loginuser has successfully logged in");
	}
	else {
		echo("back off");
	}
}
?>
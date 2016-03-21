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
	$sql = "SELECT * FROM users WHERE username =? and password=?";
	if($stmt = $mysqli_con -> prepare($sql)){
		$stmt->bind_param("ss", $loginuser, $loginpwd);
		$stmt->execute( );
		$res = $stmt->get_result();
		$row = $res->fetch_assoc();
		
		if (count($row) > 0) {
			echo($row['username']." has successfully logged in");
		}
		else {
			echo("Incorrect username or password");
		}
	}
}
$stmt->close();
$mysqli_con->close();
?>
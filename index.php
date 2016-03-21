<?php session_start(); 

if(isset($_GET['stuff'])){
	echo "storing data...";
	$_SESSION['stuff'] = $_GET['stuff'];
}
if(isset($_GET['log']) && $_GET['log'] == 'out'){
	session_destroy();
	// header('Location: index.php');
}
?> 
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	
	
	<h1>Your stored data</h1>
	<p>Stored: <?php 
	if (isset($_SESSION['stuff'])){
		echo $_SESSION['stuff'];
	} ?></p>
	<form action="index.php" method="get">
		
		<label>Enter new Stuff</label>
		
		<input type="text" name="stuff" />
		
		<label>Enter new thing</label>
		<input type="text" name="thing" />
		<input type="submit" />
		
	</form>
	
	<form action="index.php" method="get">
		<input type="hidden" name="log" value="out"/>
		<input type="submit" value="Logout"/>
	</form>
	<a href="next.php">Next page</a>
	
</body>
</html>
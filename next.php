<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<h1>Next Page</h1>
	<p>Stored: <?php echo $_SESSION['stuff'] ?></p>
	<p><a href="logout.php">Logout</a></p>
</body>
</html>
<?php 

session_start(); 

session_destroy();

//this is great
header('Location: next.php');
?>

<?php
	include 'database/connection.php';
	include 'classes/user.php';
	include 'classes/tweet.php';
	include 'classes/follow.php';

	global $pdo;

	session_start();

	$getfromU = new User($pdo);	
	$getfromT = new Tweet($pdo);
	$getfromF = new Follow($pdo);

//define constraint
	define("BASE_URL", "http://localhost/twitter/");
?>
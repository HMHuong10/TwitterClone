<?php
	$dsn = 'mysql:host=localhost:3307; dbname=tweetdb';
	$user = 'root';
	$pass = '';
	try{
		$pdo = new PDO($dsn, $user, $pass);
	}catch(PDOException $e){
		echo "Connection error!" . $e->getMessage();
	}
?>
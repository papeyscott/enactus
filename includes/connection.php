<?php

	define("DBNAME", "enactus");
	define("DBUSER", "root");
	define("DBPASS", "");
	define("DBHOST", "localhost");

	try {
		$pdo = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME,DBUSER,DBPASS);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
	}catch (PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
	}
	

?>
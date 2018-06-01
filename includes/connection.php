<?php

	define("DBNAME", "enactuso_enactusweb");
	define("DBUSER", "enactuso_root");
	define("DBPASS", "Sife4words.");
	define("DBHOST", "localhost");

	try {
		$pdo = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME,DBUSER,DBPASS);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
	}catch (PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
	}
	

?>
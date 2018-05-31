<?php
	ob_start();
	session_start();

	include_once('includes/functions.php');


	include_once('includes/connection.php');

if(isset($_GET['id'])){
	$staffID = $_GET['id'];
}

	Utils::deleteNationals($pdo, $staffID);

	Utils::redirect("viewnationals.php", "successfully deleted");
?>
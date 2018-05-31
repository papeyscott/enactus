<?php
	ob_start();
	session_start();

	include_once('includes/functions.php');


	include_once('includes/connection.php');

if(isset($_GET['id'])){
	$staffID = $_GET['id'];
}

	Utils::deleteTestimony($pdo, $staffID);

	Utils::redirect("viewtestimony.php", "successfully deleted");
?>
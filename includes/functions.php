<?php

class Utils{

	public static function getVisitationByID($dbconn, $sf_id){
			$stmt = $dbconn->prepare("SELECT * FROM teamvisit WHERE teamvisit_id=:sid");
			$stmt->bindParam(":sid", $sf_id);

			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_BOTH);

			return $row;

	}


	public static function getCampusByID($dbconn, $sf_id){
			$stmt = $dbconn->prepare("SELECT * FROM teamvisit WHERE teamvisit_id=:sid");
			$stmt->bindParam(":sid", $sf_id);

			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_BOTH);

			return $row;

	}

	public static function getPartnershipByID($dbconn, $sf_id){
			$stmt = $dbconn->prepare("SELECT * FROM partnership WHERE partnership_id=:sid");
			$stmt->bindParam(":sid", $sf_id);

			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_BOTH);

			return $row;

	}
}
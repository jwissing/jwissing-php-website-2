<?php

try {
$db = new PDO("mysql:host=localhost;dbname=ky_plant_database;port=3306","jonocono","89chevrolet");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
	echo "Unable to connect to the database";
	echo $e->getMessage();
	exit;
}

try {

		$results = $db->query("SELECT * 
								FROM plants
								INNER JOIN plant_types
								ON plants.type_id=plant_types.type_id");

	} catch (Exception $e){
		echo "Unable to retrieve results";
		exit;
	}

$plants = $results->fetchAll();
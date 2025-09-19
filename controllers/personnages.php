<?php  
require('models/_db_connect.php');
require('models/personnages.php');


if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$Pseudo = $_POST['name'];
	if (!empty($Pseudo)) {
		persos_create($Pseudo,1);
	}
}


$template = "personnages.php";
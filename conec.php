<?php
function dbConnect (){
 	$conn =	null;
 	$host = 'Localhost';
 	$db = 	'ventas';
 	$user = 'root';
 	$pwd = 	'';
	try {
	   	$conn = new PDO('mysql:host='.$host.';ventas='.$db, $user, $pwd);

	}
	catch (PDOException $e) {
		echo '<p>Error al conectar a la base de datos</p>';
	    exit;
	}
	return $conn;
 }

 ?>
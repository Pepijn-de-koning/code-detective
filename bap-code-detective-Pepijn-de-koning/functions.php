<?php

function dbConnect(){

	$config = require __DIR__ . '/config.php';

	try {
		$connection = new PDO('mysql:host='.$config['hostname'] . ';dbname=' . $config['database'], $config['username'], $config['password'] );
		$connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		$connection->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );

		// echo "Verbinding is gemaakt!";

		return $connection;

	} catch ( PDOException $e ) {
		echo 'Fout bij database verbinding: ' . $e->getMessage() . ' op regel ' . $e->getLine() . ' in ' . $e->getFile();
	}

	return false;
}

function getFullname($person){

	return $fullname;

}

?>

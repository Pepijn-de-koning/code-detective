<?php
require 'functions.php';
$connection = dbConnect();

if ( $_SERVER['REQUEST_METHOD'] === 'POST') {

}

try {
	$sql = 'INSERT INTO `people` (`firstname`, `lastname`, `birthdate`, `city`, `description`, `company`)
		VALUES (:firstname, :lastname, :birthdate, :city, :description, :company)';

	$data = [
	'firstname'   => $_POST['firstname'],
	'lastname'    => $_POST['lastname'],
	'birthdate'   => $_POST['birthdate'],
	'city'        => $_POST['city'],
	'description' => $_POST['description'],
	'company' 		=> $_POST['company']
];

$statement = $connection->prepare( $sql );
$statement->execute( $data );
header( 'location: index.php');

}

catch (PDOException $e) {
	echo 'Fout:<br>' . $e->getMessage() . ' op regel ' . $e->getLine() . ' in ' . $e->getFile();
  exit;
}
?>

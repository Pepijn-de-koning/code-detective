<?php
	require 'functions.php';

	$connection = dbConnect();
	$sql = 'SELECT * FROM `people` ORDER BY `firstname`';
	$statement = $connection->query( $sql );
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Document</title>
		<link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="/css/styles.css" />
	</head>

	<body>
		<h2>People all over the world</h2>
		<p><a href="user.php">Add new person</a></p>
		<table class="person-table">

			<?php foreach ($statement as $row) 	{

				echo "<tr><td>";
				echo $row['firstname'];
				echo "</td><td>";
				echo $row['lastname'];
				echo "</td>";

			?>
				<td><?php echo $row['birthdate']?></td>
				<td><?php echo $row['city']?></td>
				<td><?php echo $row['description']?></td>
				<td><?php echo $row['company']?></td>
			<?php } ?>

	</table>

	</body>

</html>

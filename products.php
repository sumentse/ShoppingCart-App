<?php
	header('Content-Type: application/json');
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$database = "ShoppingCart";

	$conn = new mysqli($servername, $username, $password, $database);
	if($conn->connect_error)
	{
		die("connection failed");
	}
	
	$results = $conn->query("Select * from products");

	while($row = $results->fetch_assoc())
	{
		$data[] = $row;
	}
	$test = json_encode($data);
	echo $test;
?>

<?php

$con = mysqli_connect("localhost", "root", "", "social");  //Connection variable

if(mysqli_connect_errno()) {

	echo "Failed to connect: " . mysqli_connect_errno();

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Grand Social Media</title>
</head>
<body>
	Hello Snakes!!!!!
</body>
</html>
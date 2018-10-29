<?php
require 'config/config.php';

if (isset($_SESSION['username'])){
	$userLoggedIn = $_SESSION['username'];// check if the user is logged, if not the page will force the user to registration form
}
else{
	header("location: register.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Grand Social Media</title>
</head>
<body>


	fadsdsfads
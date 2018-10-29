<?php
require 'config/config.php';

if (isset($_SESSION['username'])){
	$userLoggedIn = $_SESSION['username']; // check if the user is logged in, if not the page will force the user to registration form
}
else{
	header("location: register.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Grand Social Media</title>

  <!-- JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>

  <!-- CSS -->
	<link rel="stylesheet" type="text/css" href= "assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href= "assets/css/style.css"> 
</head>
<body>

  <div class="top_bar">
    <div class="logo">
      <a href="index.php"></a>
    </div>
  </div>

<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="#">Separated link</a></li>
  </ul>
</div>
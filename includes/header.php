<?php
require 'config/config.php';
//include("includes/classes/User.php");
//include("includes/classes/Post.php");

if (isset($_SESSION['username'])){
	$userLoggedIn = $_SESSION['username']; // check if the user is logged in, if not the page will force the user to registration form
  $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username = '$userLoggedIn'");
  $user = mysqli_fetch_array($user_details_query);
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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href= "assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href= "assets/css/style.css"> 
</head>
<body>

  <div class="top_bar">
    <div class="logo">
      <a href="index.php">Grand Social Media!</a>
    </div>

    <nav>
      <a href="<?php echo $userLoggedIn; ?>">
        <?php echo $user['first_name']; ?>
      </a>
      <a href="index.php">
        <i class="fas fa-home"></i>
      </a>
      <a href="#">
        <i class="fas fa-envelope"></i>
      </a>
      <a href="#">
        <i class="fas fa-bell"></i>
      </a>
      <a href="requests.php">
        <i class="fas fa-users"></i>
      </a>
      <a href="#">
        <i class="fas fa-cog"></i>
      </a>
      <a href="includes/handlers/logout.php">
        <i class="fas fa-sign-out-alt"></i>
      </a>
    </nav>

  </div>

  <div class ="wrapper">

<!-- Single button -->
<!--<div class="btn-group">
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
</div>-->
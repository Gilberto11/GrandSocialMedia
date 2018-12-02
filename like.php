<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href= "assets/css/style.css">
</head>
<body>
	
	<?php
    require 'config/config.php';
    include("includes/classes/User.php");
    include("includes/classes/Post.php");
    

if (isset($_SESSION['username'])){
    $userLoggedIn = $_SESSION['username']; // check if the user is logged in, if not the page will force the user to registration form
  $user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username = '$userLoggedIn'");
  $user = mysqli_fetch_array($user_details_query);
}
else{
    header("location: register.php");
}

?>
</body>
</html>
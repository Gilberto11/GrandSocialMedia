<?php
include("includes/header.php");

if(isset($_GET['profile_username'])) {
	$username = $_GET['profile_username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username= '$username'");
	$user_array = mysqli_fetch_array($user_details_query);
}


?>
	
	<div  class="main_column column">
	 <?php echo $username; ?>
		
			

	</div>



	</div>
</body>
</html>
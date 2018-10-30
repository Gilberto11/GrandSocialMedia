<?php
include("includes/header.php");
?>
	<div class= "user_details column">
		<a href="#"><img src= "<?php echo $user['profile_pic']?>"></a>

		<?php 

			echo $user['first_name'] . " " . $user['last_name'];

		 ?>

	</div>


	</div>
</body>
</html>
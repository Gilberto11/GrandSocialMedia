<?php
include("includes/header.php");
?>
	<div class= "user_details column">
		<a href="#"><img src= "<?php echo $user['profile_pic']?>"></a>

		<a href="#">
		<?php 

			echo $user['first_name'] . " " . $user['last_name'];

		?>
		</a>
		<?php echo "Posts: " . $user['num_posts']. "<br>";

			echo "Likes: " . $user['num_likes'];

		?>

	</div>


	</div>
</body>
</html>
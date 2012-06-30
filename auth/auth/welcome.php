// welcome.php
<?php session_start(); ?>

<html>
 
 <div id="past_purchases">
	<ul>
	<?php
	   $purchases = $_SESSION['purchases'];	   
	   for ($i ) 
	   {
		 echo '<li>' . $purchases[$i].itemName . "</li>"
	   }
	?>
	</ul>
 </div>

 <div>
	<h2>My profile<h2>
		<?php
		   $profile = $_SESSION['profile'];
		?>
</html>

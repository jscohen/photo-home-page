<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Jonathan S. Cohen - Photography, Design and Development</title>
<meta charset="utf-8">
<meta name="keywords" content="Jonathan Cohen, China, Photography, Web Design, Web Development, PHP Development, Tibet, Xinjiang, Yunnan" >
<meta name="description" content="Jonathan Cohen's Photography Page showcasing photos from all parts of China" >

<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet" type="text/css" href="lytebox.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/tabs.css" />
<script src="lytebox.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>

</script>
<?php
if(!isset($_SESSION["name"])) {
echo '<script src="js/hide_ecommerce.js"></script>';
}
?>
<style>
	p {
		margin-left:5px;
	}
	.lytebox {
		text-decoration:none;
	}
</style>
</head>

<body>
<div id="body_wrapper">
<?php
if(isset($_SESSION["name"])) {
	echo "<div class='head'><span>Welcome ";
	echo $_SESSION["name"];
	echo "!</span>   <a href='scripts/logout.php'>Log out</a></div>";
	echo "<br /><div class='head'><a href='shopping_cart.php'>Shopping Cart</a></div>";
}
else {
 echo "<p class='head'><a href='login.php'>Log In</a>   <a href='sign_up.html'>Sign up</a></p>";
}
?>
<header>
<h1>Jonathan S. Cohen</h1>
<h2 class="tagline">Photos</h2>

<nav>
  <ul id="nav">
    <li><a href="index.php" class="bordered">Home</a></li>
    <li><a href="photos.php" class="bordered">Photography</a></li>
  </ul>
</nav>
</header>

<div class="break"></div>
<div class="intro">
<h2>Beijing</h2>
<p>Beijing is the capital of China, home to the Forbidden City and Tiananmen Square.  My photos there took place during 2006.  In Beijing, I travelled around the city and also to the Great Wall of China.</p>

    <p class="thumbs">
	  <div class="photoCon"><a href="img/beijing/forbiddencity001.jpg" class="lytebox" data-lyte-options="group:beijing" data-title="The front of the Forbidden City"><img class="thumb" src="img/thumbs/forbiddencity_001_thumb.jpg" alt="The front of the forbidden city" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:100px;" name="1" /></form></div>
	  <div class="photoCon"><a href="img/beijing/forbiddencity032.jpg" class="lytebox" data-lyte-options="group:beijing" data-title="A Wall in the Forbidden City"><img class="thumb" src="img/thumbs/forbiddencity_032_thumb.jpg" alt="A Wall in the Forbidden City" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:100px;" name="2" /></form></div>
	  <div class="photoCon"><a href="img/beijing/greatwall018.jpg" class="lytebox" data-lyte-options="group:beijing" data-title="A shot of the Great Wall of China"><img class="thumb" src="img/thumbs/greatwall_018_thumb.jpg" alt="A shot of the Great Wall of China" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:100px;" name="3" /></form></div>
	  <div class="photoCon"><a href="img/beijing/tiananmen093.jpg" class="lytebox" data-lyte-options="group:beijing" data-title="A shot of Tiananmen Square and Chinese Parliament at night"><img class="thumb" src="img/thumbs/tiananmen093_thumb.jpg" alt="A shot of Tiananmen Square and Chinese Parliament at night" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:100px;" name="4" /></form></div>
	</p>

</div>
<div class="clear"></div>

<footer>
<div><a href="index.php">Home</a> | <a href="photos.php">Photography</a></div>
<small>All images &copy; Jonathan Cohen 2012</small>
</footer>
</div>
</body>
</html>
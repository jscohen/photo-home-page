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
<h2>Yunnan</h2>
<p>Yunnan is China's most southwestern province, bordering Burma and Cambodia.  Home to China's most ethnically diverse population, Yunnan offers great opportunities for sightseeing and hiking.</p>
	
    <p class="thumbs">
	  <div class="photoCon"><a href="img/yunnan/yunnan346.jpg" class="lytebox" data-lyte-options="group:yunnan" data-title="A temple in Xishuangbanna, Yunnan"><img class="thumb" src="img/thumbs/yunnan_346_thumb.jpg" alt="Entrance to a Buddhist Temple, Xishuangbanna, Yunnan" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:100px;" name="21" /></form></div>
	  <div class="photoCon"><a href="img/yunnan/yunnan360.jpg" class="lytebox" data-lyte-options="group:yunnan" data-title="A pagoda in Southwestern Yunnan, near Burma"><img class="tall" src="img/thumbs/yunnan_360_thumb.jpg" alt="A Pagoda, Xishuangbanna, Yunnan" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:100px;" name="22" /></form></div>
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
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
else {
	echo '<script src="js/add_cart.js"></script>';
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
	echo "<br /><div class='head'><a href='shopping_cart.php'><img src='img/cart.png' alt='shopping cart' />Shopping Cart"; 
	if(isset($_SESSION['ids'])) {
		if(count($_SESSION['ids']) === 1) {
			echo " (1 item)</a></div>";
		}
		else {
			echo " ("; echo count($_SESSION['ids']); echo " items)</a></div>";
		}
	}
	else {
		echo "</a></div>";
	}
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
<h2>Xinjiang</h2>
<p>Xinjiang is China's far western province directly north of Tibet.  Populated by the Turkic Muslim Uighurs, Xinjiang holds a store of surprises for visitors from other parts of China.</p>

	<p class="thumbs">
	  <div class="photoCon"><a href="img/xinjiang/xj_036.jpg" class="lytebox" data-lyte-options="group:xinjiang" data-title="Exploring the Taklamakan Desert, Xinjiang"><img class="thumb" src="img/thumbs/xj_036_thumb.jpg" alt="The Taklamakan Desert, Western Xinjiang near Kashgar 1" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:10px;" name="16" /></form></div>
	  <div class="photoCon"><a href="img/xinjiang/xj_037.jpg" class="lytebox" data-lyte-options="group:xinjiang" data-title="Desert Dunes, Taklamakan, Xinjiang"><img class="thumb" src="img/thumbs/xj_038_thumb.jpg" alt="The Taklamakan Desert, Western Xinjiang 2" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:10px;" name="17" /></form></div>
	  <div class="photoCon"><a href="img/xinjiang/xj_038.jpg" class="lytebox" data-lyte-options="group:xinjiang" data-title="Alone in the desert, Taklamakan, Xinjiang"><img class="thumb" src="img/thumbs/xj_037_thumb.jpg" alt="The Taklamakan Desert, Western Xinjiang 3" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:10px;" name="18" /></form></div>
	  <div class="photoCon"><a href="img/xinjiang/xj_042.jpg" class="lytebox" data-lyte-options="group:xinjiang" data-title="A lone rider on Tashkurgan Lake near Kyrgyzstan, Xinjiang"><img class="thumb" src="img/thumbs/xj_042_thumb.jpg" alt="A lone rider on lake Tashkurgan near the Kyrgyz border" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:10px;" name="19" /></form></div>
	  <div class="photoCon"><a href="img/xinjiang/xj_007.jpg" class="lytebox" data-lyte-options="group:xinjiang" data-title="The Khoja mosque, Kashgar, Xinjiang"><img class="thumb" src="img/thumbs/xj_007_thumb.jpg" alt="The Khoja Mosque near Kashgar, Xinjiang" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:10px;" name="20" /></form></div>
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
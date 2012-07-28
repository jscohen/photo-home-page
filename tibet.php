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
	echo "<br /><div class='head'><img src='img/cart.png' alt='shopping cart' /><a href='shopping_cart.php'>Shopping Cart"; 
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
 echo "<p class='head'><a href='login.php'>Log In</a> |  <a href='sign_up.html'>Sign up</a></p>";
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
<h2>Tibet</h2>
<p>Tibet, or Shangri-La, is home to vistas of stunning natural beauty and a local populace devout in their version of Buddhism.  It also is the home of Mount Everest, or Qomolangma to the locals.  Located in the far west of China and bordering India and Nepal, Tibet provides wonderful opportunities for the photographer.</p>

    <div class="thumbs">
	  <div class="photoCon"><a href="img/tibet/IMG_1065.JPG" class="lytebox" data-lyte-options="group:tibet" data-title="The Potala Palace, Lhasa, Tibet"><img class="thumb" src="img/thumbs/IMG_1065_thumb.jpg" alt="The Potala Palace, Lhasa, Tibet" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:10px;" name="11" /></form></div>
	  <div class="photoCon"><a href="img/tibet/IMG_1333.JPG" class="lytebox" data-lyte-options="group:tibet" data-title="The fortress of Shigatse, Tibet, overlooking grassland"><img class="thumb" src="img/thumbs/IMG_1333_thumb.jpg" alt="Fortress and Grassland, Shigatse, Tibet" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:10px;" name="12" /></form></div>
	  <div class="photoCon"><a href="img/tibet/IMG_1349.JPG" class="lytebox" data-lyte-options="group:tibet" data-title="Monks walking by prayer wheels, Drepung Monastery, Tibet"><img class="thumb" src="img/thumbs/IMG_1349_thumb.jpg" alt="Monks and Prayer Wheels, Shigatse, Tibet" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:10px;" name="13" /></form></div>
	  <div class="photoCon"><a href="img/tibet/ToEverestandBack203.jpg" class="lytebox" data-lyte-options="group:tibet" data-title="The road to Everest, Tibet"><img class="thumb" src="img/thumbs/ToEverestandBack203_thumb.jpg" alt="The road to Mount Everest, Tibet" /></a><br /><br /><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:10px;" name="14" /></form></div>
      <div class="photoCon"><a href="img/tibet/ToEverestandBack040.jpg" class="lytebox" data-lyte-options="group:tibet" data-title="Mount Everest, Tibet"><img class="thumb" src="img/thumbs/ToEverestandBack040_thumb.jpg" alt="Mount Everest, Tibet" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:10px;" name="15" /></form></div>
	</div>
  </div>
  <div class="clear"></div>

<footer>
<div><a href="index.php">Home</a> | <a href="photos.php">Photography</a></div>
<small>All images &copy; Jonathan Cohen 2012</small>
</footer>
</div>
</body>
</html>
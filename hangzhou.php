<?php

session_start();

require "scripts/populate_photos.php";

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
	echo '<link rel="stylesheet" type="text/css" href="css/unset.css" />';
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
<h2>Hangzhou</h2>
<p>Hangzhou is a beautiful city in southern China dominated by the West Lake.  Known for its tea and natural beauty, I spent the summer of 2006 there.</p>
	
    <div class="thumbs">
	  <div class="photoCon"><a href="img/hangzhou/huangshan_zhaopian040.jpg" class="lytebox" data-lyte-options="group:hangzhou" data-title="A waterfall by Huang Shan (Yellow Moutain), Anhui Province, China"><img class="thumb" src="img/thumbs/huangshan_zhaopian040_thumb.jpg" alt="A waterfall by Huang Shan, the Yellow Mountain" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:10px;" name="5" /></form><span><?php echo $descs[4];?></span><span>  <strong>|</strong>  Price: $<?php echo $costs[4];?>.00</span></div>
	  <div class="photoCon"><a href="img/hangzhou/huangshan_zhaopian046.jpg" class="lytebox" data-lyte-options="group:hangzhou" data-title="The misty Yellow Mountains, Anhui Province, China"><img class="thumb" src="img/thumbs/huangshan_zhaopian046_thumb.jpg" alt="The misty Yellow Mountains, Anhui, China" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:10px;" name="6" /></form><span><?php echo $descs[5];?></span><span>  <strong>|</strong>  Price: $<?php echo $costs[5];?>.00</span></div>
	  <div class="photoCon"><a href="img/hangzhou/huangshan_zhaopian067.jpg" class="lytebox" data-lyte-options="group:hangzhou" data-title="An island beach in Wenzhou"><img class="thumb" src="img/thumbs/huangshan_zhaopian067_thumb.jpg" alt="An island beach in Wenzhou" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:10px;" name="7" /></form><span><?php echo $descs[6];?></span><span>  <strong>|</strong>  Price: $<?php echo $costs[6];?>.00</span></div>
	  <div class="photoCon"><a href="img/hangzhou/IMG_0605.JPG" class="lytebox" data-lyte-options="group:hangzhou" data-title="A boat on the West Lake, Hangzhou"><img class="thumb" src="img/thumbs/IMG_0605_thumb.jpg" alt="A boat on the West Lake in Hangzhou" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:10px;" name="8" /></form><span><?php echo $descs[7];?></span><span>  <strong>|</strong>  Price: $<?php echo $costs[7];?>.00</span></div>
	  <div class="photoCon"><a href="img/hangzhou/IMG_0621.JPG" class="lytebox" data-lyte-options="group:hangzhou" data-title="A pagoda on the West Lake, Hangzhou"><img class="thumb" src="img/thumbs/IMG_0621_thumb.jpg" alt="A pagoda on the lake, Hangzhou" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:10px;" name="9" /></form><span><?php echo $descs[8];?></span><span>  <strong>|</strong>  Price: $<?php echo $costs[8];?>.00</span></div>
	  <div class="photoCon"><a href="img/hangzhou/IMG_0622.JPG" class="lytebox" data-lyte-options="group:hangzhou" data-title="Sunset on the West Lake, Hangzhou"><img class="thumb" src="img/thumbs/IMG_0622_thumb.jpg" alt="Sunset on the Lake with a pagoda in the background, Hangzhou" /></a><form action="scripts/add_to_cart.php"><input type="submit" value="Add to Cart" method="get" class="photo" style="margin-left:10px;" name="10" /></form><span><?php echo $descs[9];?></span><span>  <strong>|</strong>  Price: $<?php echo $costs[9];?>.00</span></div>
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
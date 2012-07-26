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
<style>
	p {
		margin-left:5px;
	}
	.lytebox {
		text-decoration:none;
	}
	.sectionLink {
		display:block;
		text-decoration:none;
		color:black;
	}
	.sectionLink:hover {
		background-color:#D0D0D0 ;
		opacity:0.7;
	}
	h2 {
		text-align:center;
	}
	#photoContainer {
		margin-left:10%;
	}
	.section {
		display:inline;
		float:left;
		padding:5px;
		margin:5px;
	}
	#last {
		margin-left:20%;
	}
	.intro {
		background-color:#b3c7e6;
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
<h2>Welcome to the photos page!</h2>
<p class="intro_p">Here you can see all of the photos I took while in China in 2006.  Click on the tabs to select which region you would like to visit.  If you click on a thumbnail photo, a larger gallery will display using lytebox.</p>
<p class="intro_p">You must log in or create an account to use the e-commerce features of this site.  If you want to buy one of these photos, click the "add to cart" button just below it once you're logged in.  If you are running Internet Explorer, please make sure to allow scripts so that everything works!</p>
<p class="intro_p">Select one of the regions of China to view photos from there.</p>

<div id="photoContainer">
<div class="section">
<a href="beijing.php" class="sectionLink">
<h2>Beijing</h2>
<img src="img/thumbs/forbiddencity_001_thumb.jpg" alt="The front of the forbidden city" />
</a>
</div>

<div class="section">
<a href="hangzhou.php" class="sectionLink">
<h2>Hangzhou</h2>
<img src="img/thumbs/IMG_0622_thumb.jpg" alt="Sunset on the Lake with a pagoda in the background, Hangzhou" />
</a>
</div>

<div class="section">
<a href="tibet.php" class="sectionLink">
<h2>Tibet</h2>
<img src="img/thumbs/ToEverestandBack040_thumb.jpg" alt="Mount Everest, Tibet" />
</a>
</div>

<div class="section">
<a href="xinjiang.php" class="sectionLink">
<h2>Xinjiang</h2>
<img src="img/thumbs/xj_007_thumb.jpg" alt="The Khoja Mosque near Kashgar, Xinjiang" />
</a>
</div>

<div class="section" id="last">
<a href="yunnan.php" class="sectionLink">
<h2>Yunnan</h2>
<img src="img/thumbs/yunnan_346_thumb.jpg" alt="Entrance to a Buddhist Temple, Xishuangbanna, Yunnan" />
</a>
</div>

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
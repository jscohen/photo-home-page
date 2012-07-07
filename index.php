<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Jonathan S. Cohen - Photography, Design and Development</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<!--[if lt IE 9]>
<script scr="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="js/slider.js"></script>
</head>
<body>

<div id="body_wrapper">
<?php
if(isset($_SESSION["name"])) {
	echo "<div style='float:right'><span>Welcome ";
	echo $_SESSION["name"];
	echo "!</span>   <a href='logout.php'>Log out</a></div>";
}
else {
 echo "<p id='signup'><a href='login.html'>Log In</a>   <a href='sign_up.html'>Sign up</a></p>";
}
?>
<header>
<h1>Jonathan S. Cohen</h1>
<div id="head_wrap">
<h2 class="tagline">Photography, Design and Development</h2>

<nav>
  <ul id="nav">
    <li><a href="index.php" class="bordered">Home</a></li>
    <li><a href="photos.php" class="bordered">Photography</a></li>
  </ul>
</nav>
</div>
</header>

<div class="break"></div>
<div id="slider_container">
<div id="photos">
	<img src="img/hangzhou/huangshan_zhaopian040.jpg" id="img1" alt="A waterfall near the Yellow Mountains, Anhui Province, China" />
	
	<img src="img/beijing/forbiddencity032.jpg" class="hide" id="img2" alt="A Wall in the Forbidden City, Beijing" />
	
	<img src="img/tibet/IMG_1349.jpg" class="hide" id="img3" alt="Monks walking by pagodas, Drepung monastery, Tibet" />
	
	<img src="img/xinjiang/xj_042.jpg" class="hide" id="img4" alt="A lone rider on Tashkurgan lake, Western Xinjiang" />
	
<p id="cap1">A waterfall near the Yellow Moutains, Anhui Province, China</p>
<p class="hide" id="cap2">A wall in the Forbidden City, Beijing</p>
<p class="hide" id="cap3">Monks walking by pagodas, Drepung Monastery, Tibet</p>
<p class="hide" id="cap4">A lone rider on Tashkurgan Lake, Western Xinjiang</p>
</div>
<br />
<div id="buttons">
<button id="prev">Previous Image</button>
<button id="next">Next Image</button>
</div>
</div>

<br />
<br />
<br />

<div id="column_wrapper">
  <div id="column1">
    <h2>About Me</h2>

    <p>I am currently a masters student at BU Metropolitan College studying Computer Information Systems.  My interest include web design and development, programming, jogging, reading and photography.</p>
  </div>

  <div id="column2">
    <h2>Photography</h2>

    <p>In 2005-2006, I lived abroad in China and Israel.  In China, I spent a fair amount of time in the remote far western provinces of Xinjiang, Tibet and Yunnan, focusing my photography on landscapes and scenery.</p>
  </div>
  <div id="column3">

  <h2>Contact Me </h2>

  <p>I'm looking for work in web design and development and if you're interested in that or the photography, <a href="mailto:jon.cohen08@gmail.com">drop me a line</a>.</p>
  </div>
</div>

<footer>
<div><a href="index.html">Home</a> | <a href="photos.html">Photography</a></div>
</footer>
</div>
</body>
</html>
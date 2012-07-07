<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Jonathan S. Cohen - Photography, Design and Development</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<link rel="stylesheet" type="text/css" href="lytebox.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/tabs.css" />
<script src="lytebox.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="js/tabs.js"></script>
<style>
	p {
		margin-left:5px;
	}
	.lytebox {
		text-decoration:none;
	}
</style>
<script>
$(function insert() {
	$('.lytebox').append('<div style="position:absolute"><button style="margin-left:100px;">Add to Cart</button>  <button>Find this photo on Google Maps!</button></div>');
});
</script>
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
<p class="intro_p">If you want to buy one of these photos, click the "add to cart" button just below it.  If you are running Internet Explorer, please make sure to allow scripts so that everything works!</p>
</div>
<div id="tabs">
  <ul class="tabNav">
    <li><a href="#tabs-1" class="bordered">Beijing</a></li>
	<li><a href="#tabs-2" class="bordered">Hangzhou</a></li>
	<li><a href="#tabs-3" class="bordered">Tibet</a></li>
	<li><a href="#tabs-4" class="bordered">Xinjiang</a></li>
	<li><a href="#tabs-5" class="bordered">Yunnan</a></li>
  </ul>
  <div id="tabs-1" class="selected">
	<br />
	<h1>Beijing</h1>
	<p>Beijing is the capital of China, home to the Forbidden City and Tiananmen Square.  My photos there took place during 2006.</p>

    <p class="thumbs">
	  <a href="img/beijing/forbiddencity001.jpg" class="lytebox" data-lyte-options="group:beijing" data-title="The front of the Forbidden City"><img class="thumb" src="img/thumbs/forbiddencity_001_thumb.jpg" alt="The front of the forbidden city" /></a>
	  <a href="img/beijing/forbiddencity032.jpg" class="lytebox" data-lyte-options="group:beijing" data-title="A Wall in the Forbidden City"><img class="thumb" src="img/thumbs/forbiddencity_032_thumb.jpg" alt="A Wall in the Forbidden City" /></a><br /><br />
	  <a href="img/beijing/greatwall018.jpg" class="lytebox" data-lyte-options="group:beijing" data-title="A shot of the Great Wall of China"><img class="thumb" src="img/thumbs/greatwall_018_thumb.jpg" alt="A shot of the Great Wall of China" /></a>
	  <a href="img/beijing/tiananmen093.jpg" class="lytebox" data-lyte-options="group:beijing" data-title="A shot of Tiananmen Square and Chinese Parliament at night"><img class="thumb" src="img/thumbs/tiananmen093_thumb.jpg" alt="A shot of Tiananmen Square and Chinese Parliament at night" /></a>
	</p>
  </div>
  
  <div id="tabs-2">
	<br />
	<h1>Hangzhou</h1>
	<p>Hangzhou is a beautiful city in southern China dominated by the West Lake.  Known for its tea and natural beauty, I spent the summer of 2006 there.</p>
	
    <p class="thumbs">
	  <a href="img/hangzhou/huangshan_zhaopian040.jpg" class="lytebox" data-lyte-options="group:hangzhou" data-title="A waterfall by Huang Shan (Yellow Moutain), Anhui Province, China"><img class="thumb" src="img/thumbs/huangshan_zhaopian040_thumb.jpg" alt="A waterfall by Huang Shan, the Yellow Mountain" /></a>
	  <a href="img/hangzhou/huangshan_zhaopian046.jpg" class="lytebox" data-lyte-options="group:hangzhou" data-title="The misty Yellow Mountains, Anhui Province, China"><img class="thumb" src="img/thumbs/huangshan_zhaopian046_thumb.jpg" alt="The misty Yellow Mountains, Anhui, China" /></a><br /><br />
	  <a href="img/hangzhou/huangshan_zhaopian067.jpg" class="lytebox" data-lyte-options="group:hangzhou" data-title="An island beach in Wenzhou"><img class="thumb" src="img/thumbs/huangshan_zhaopian067_thumb.jpg" alt="An island beach in Wenzhou" /></a>
	  <a href="img/hangzhou/IMG_0605.JPG" class="lytebox" data-lyte-options="group:hangzhou" data-title="A boat on the West Lake, Hangzhou"><img class="thumb" src="img/thumbs/IMG_0605_thumb.jpg" alt="A boat on the West Lake in Hangzhou" /></a><br /><br />
	  <a href="img/hangzhou/IMG_0621.JPG" class="lytebox" data-lyte-options="group:hangzhou" data-title="A pagoda on the West Lake, Hangzhou"><img class="thumb" src="img/thumbs/IMG_0621_thumb.jpg" alt="A pagoda on the lake, Hangzhou" /></a>
	  <a href="img/hangzhou/IMG_0622.JPG" class="lytebox" data-lyte-options="group:hangzhou" data-title="Sunset on the West Lake, Hangzhou"><img class="thumb" src="img/thumbs/IMG_0622_thumb.jpg" alt="Sunset on the Lake with a pagoda in the background, Hangzhou" /></a>
	</p>
  </div>
  
  <div id="tabs-3">
	<br />
	<h1>Tibet</h1>
	<p>Tibet, or Shangri-La, is home to vistas of stunning natural beauty and a local populace devout in their version of Buddhism.  It also is the home of Mount Everest, or Qomolangma to the locals.</p>

    <p class="thumbs">
	  <a href="img/tibet/IMG_1065.JPG" class="lytebox" data-lyte-options="group:tibet" data-title="The Potala Palace, Lhasa, Tibet"><img class="thumb" src="img/thumbs/IMG_1065_thumb.jpg" alt="The Potala Palace, Lhasa, Tibet" /></a>
	  <a href="img/tibet/IMG_1333.JPG" class="lytebox" data-lyte-options="group:tibet" data-title="The fortress of Shigatse, Tibet, overlooking grassland"><img class="thumb" src="img/thumbs/IMG_1333_thumb.jpg" alt="Fortress and Grassland, Shigatse, Tibet" /></a><br /><br />
	  <a href="img/tibet/IMG_1349.JPG" class="lytebox" data-lyte-options="group:tibet" data-title="Monks walking by prayer wheels, Drepung Monastery, Tibet"><img class="thumb" src="img/thumbs/IMG_1349_thumb.jpg" alt="Monks and Prayer Wheels, Shigatse, Tibet" /></a>
	  <a href="img/tibet/ToEverestandBack203.jpg" class="lytebox" data-lyte-options="group:tibet" data-title="The road to Everest, Tibet"><img class="thumb" src="img/thumbs/ToEverestandBack203_thumb.jpg" alt="The road to Mount Everest, Tibet" /></a><br /><br />
      <a href="img/tibet/ToEverestandBack040.jpg" class="lytebox" data-lyte-options="group:tibet" data-title="Mount Everest, Tibet"><img class="thumb" src="img/thumbs/ToEverestandBack040_thumb.jpg" alt="Mount Everest, Tibet" /></a>
	</p>
  </div>
  
  <div id="tabs-4">
	<br />
	<h1>Xinjiang</h1>
	<p>Xinjiang is China's far western province directly north of Tibet.  Populated by a Turkic Muslim ethnicity known as the Uighurs, Xinjiang holds a store of surprises for visitors from other parts of China.</p>

	<p class="thumbs">
	  <a href="img/xinjiang/xj_036.jpg" class="lytebox" data-lyte-options="group:xinjiang" data-title="Exploring the Taklamakan Desert, Xinjiang"><img class="thumb" src="img/thumbs/xj_036_thumb.jpg" alt="The Taklamakan Desert, Western Xinjiang near Kashgar 1" /></a>
	  <a href="img/xinjiang/xj_037.jpg" class="lytebox" data-lyte-options="group:xinjiang" data-title="Desert Dunes, Taklamakan, Xinjiang"><img class="thumb" src="img/thumbs/xj_038_thumb.jpg" alt="The Taklamakan Desert, Western Xinjiang 2" /></a><br /><br />
	  <a href="img/xinjiang/xj_038.jpg" class="lytebox" data-lyte-options="group:xinjiang" data-title="Alone in the desert, Taklamakan, Xinjiang"><img class="thumb" src="img/thumbs/xj_037_thumb.jpg" alt="The Taklamakan Desert, Western Xinjiang 3" /></a>
	  <a href="img/xinjiang/xj_042.jpg" class="lytebox" data-lyte-options="group:xinjiang" data-title="A lone rider on Tashkurgan Lake near Kyrgyzstan, Xinjiang"><img class="thumb" src="img/thumbs/xj_042_thumb.jpg" alt="A lone rider on lake Tashkurgan near the Kyrgyz border" /></a><br /><br />
	  <a href="img/xinjiang/xj_007.jpg" class="lytebox" data-lyte-options="group:xinjiang" data-title="The Khoja mosque, Kashgar, Xinjiang"><img class="thumb" src="img/thumbs/xj_007_thumb.jpg" alt="The Khoja Mosque near Kashgar, Xinjiang" /></a>
	</p>
  </div>
  
  <div id="tabs-5">
	<br />
	<h1>Yunnan</h1>
	<p>Yunnan is China's most southwestern province, bordering Burma and Cambodia.  Home to China's most ethnically diverse population, Yunnan offers great opportunities for sightseeing and hiking.</p>
	
    <p class="thumbs">
	  <a href="img/yunnan/yunnan346.jpg" class="lytebox" data-lyte-options="group:yunnan" data-title="A temple in Xishuangbanna, Yunnan"><img class="thumb" src="img/thumbs/yunnan_346_thumb.jpg" alt="Entrance to a Buddhist Temple, Xishuangbanna, Yunnan" /></a>
	  <a href="img/yunnan/yunnan360.jpg" class="lytebox" data-lyte-options="group:yunnan" data-title="A pagoda in Southwestern Yunnan, near Burma"><img class="thumb" src="img/thumbs/yunnan_360_thumb.jpg" alt="A Pagoda, Xishuangbanna, Yunnan" /></a>
	</p>
  </div>

</div>

<footer>
<div><a href="index.html">Home</a> | <a href="photos.html">Photography</a></div>
</footer>
</div>
</body>
</html>
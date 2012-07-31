<?php

session_start();
require "scripts/database.mysql.php";

$row = array();

foreach($_SESSION['ids'] as &$value) {
	$users = mysql_query("SELECT * FROM photos WHERE ID='$value'", $resource);
	array_push($row, mysql_fetch_assoc($users));
}

$_SESSION['cart'] = $row;

$info = array();

foreach($_POST as &$value) {
	if(!empty($value)) {
		if($value === "checked") {
			continue;
		}
		array_push($info, $value);
	}
}

$count = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Jonathan S. Cohen - Photography, Design and Development</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<style>

#billing, #shipping {
	float:left;
}


#shipping {
	margin-bottom:100px;
	margin-left:30px;
}

#billing {
	margin-left:15px;
}

#container {
	margin-left: 25%;
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
<h2 class="tagline">Photography, Design and Development</h2>

<nav>
  <ul id="nav">
    <li><a href="index.php" class="bordered">Home</a></li>
    <li><a href="photos.php" class="bordered">Photography</a></li>
  </ul>
</nav>
</header>

<div class="break"></div>

<br />
<br />
<h2>Your purchased photos</h2>
<table border='1'>
  <tr>
    <th>Photo Description</th>
    <th>Price</th>
  </tr>
    
<?php
  foreach($_SESSION['cart'] as &$photo) {
    echo "<tr><td>";
    print_r($photo['description']);
    echo "</td><td>$";
    print_r($photo['price']);
    echo ".00</td></tr>";
  }
    echo "<tr><td>Total</td><td>$";
	echo $_SESSION['total'];
	echo ".00</td></tr>";
?>
</table>

<div id="container">
<div id="billing">
<h3>These photos will be billed to:</h3>
<table border="1">
<?php 
	for($i = $count; $i < 10; $i++) {
		if(isset($info[$i])) {
			echo "<tr><td>";
			echo $info[$i];
			echo "</td></tr>";
		}
		$count++;
	}
?>
</table>
</div>
<?php if(!isset($_POST['noship'])) {
echo "<div id='shipping'>
<h3>These photos will be shipped to:</h3>
<table border='1'>";

	for($i = $count; $i < 22; $i++) {
		if(isset($info[$i])) {
			echo "<tr><td>";
			echo $info[$i];
			echo "</td></tr>";
		}
	}
	

}

echo "</table></div>";
?>
<div class="clear"></div>

</div>
<h2>Thank you for using the site!</h2>


<footer>
<div><a href="index.php">Home</a> | <a href="photos.php">Photography</a></div>
<small>All images &copy; Jonathan Cohen 2012</small></footer>
</div>
</body>
</html>
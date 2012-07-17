<?php

session_start();
require "database.mysql.php";

$row = array();

foreach($_SESSION['ids'] as &$value) {
	$users = mysql_query("SELECT * FROM photos WHERE ID='$value'", $resource);
	array_push($row, mysql_fetch_assoc($users));
}

$_SESSION['cart'] = $row;

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Jonathan S. Cohen - Photography, Design and Development</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body>
<div id="body_wrapper">
<?php
if(isset($_SESSION["name"])) {
	echo "<div class='head'><span>Welcome ";
	echo $_SESSION["name"];
	echo "!</span>   <a href='logout.php'>Log out</a></div>";
	echo "<br /><div class='head'><a href='shopping_cart.php'>Shopping Cart</a></div>";
}
else {
 echo "<p class='head'><a href='login.php'>Log In</a>   <a href='sign_up.html'>Sign up</a></p>";
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
<?php 

if(empty($_SESSION['ids'])) {
	echo "<h2>Your shopping cart is empty</h2>";
}
else {

  echo "<h2>Shopping Cart</h2>
         <table border='1'>
           <tr>
             <th>Photo Description</th>
             <th>Price</th>
          </tr>";  

  foreach($_SESSION['cart'] as &$photo) {
    echo "<tr><td>";
    print_r($photo['description']);
    echo "</td><td>$";
    print_r($photo['price']);
    echo ".00</td></tr>";
  }

echo "</table>";
}
?>

<a href="emptyCart.php" class="checkout"><button>Clear Shopping Cart</button></a>
<a href="checkout.php" class="checkout"><button>Checkout</button></a>

<footer>
<div><a href="index.html">Home</a> | <a href="photos.html">Photography</a></div>
<small>&copy; Jonathan Cohen 2012</small>
</footer>
</div>
</body>
</html>
<?php

session_start();
require "database.mysql.php";

print_r($_SESSION['cart']);

foreach($_SESSION['cart'] as &$value) {
	$users = mysql_query("SELECT * FROM photos WHERE ID='$value'", $resource);
	$row = mysql_fetch_assoc($users);
}

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

<h2>Shopping Cart</h2>

<table border="1">
<tr>
  <th>Photo Description</th>
  <th>Price</th>
</tr>
<tr>
  <td><?php print_r($row); ?></td>
  <td></td>
</tr>
</table>

<button>Checkout</button>

<footer>
<div><a href="index.html">Home</a> | <a href="photos.html">Photography</a></div>
</footer>
</div>
</body>
</html>
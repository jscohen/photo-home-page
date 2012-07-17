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
<script>
$(document).ready(function() {
	$('.noFloat').click(function() {
		$('#shipping').toggle();
	});
});
</script>
<style>
label {
	float:left;
	width:175px;
}

input {
	float:left;
	width:300px;
}

.noFloat {
	float:none;
}

.clear {
	clear:both;
}

.form h4 {
	margin-left:180px;
}

#shipping, #billing {
	float:left;
}

#shipping {
	margin-bottom:100px;
	margin-left:30px;
}

#billing {
	margin-left:15px;
}

#submit {
	width:100px;
	margin-left:450px;
}

.check {
	text-align:center;
}
</style>
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
?>

</table>


<h2>Please enter your billing and shipping information</h2>
<h2>Please note that this is a class project site; DO NOT actually send your personal information here</h2>
<br />

<div class="formContainer">
<form class="billing" action="confirm.php" method="post">
<p class="check">My billing and shipping addresses are the same <input type="checkbox" class="noFloat" name="noship" value="checked" /></p>

<div id="billing">
<h4>Billing Info</h4>
<span>Form of address:<span>
<select name="baddress">
  <option value="Dr.">Dr.</option>
  <option value="Mr.">Mr.</option>
  <option value="Ms.">Ms.</option>
  <option value="Mrs.">Mrs.</option>
</select><br /><br />
<label>First Name</label><input type="text" name="bfname" /><div class="clear"></div><br />
<label>Last Name</label><input type="text" name="blname" /><div class="clear"></div><br />
<label>Billing Address Line 1</label> <input type="text" name="badd1" /><div class="clear"></div><br />
<label>Billing Address Line 2</label> <input type="text" name="badd2" /><div class="clear"></div><br />
<label>Billing Address Line 3</label> <input type="text" name="badd3" /><div class="clear"></div><br />
<label>Apartment Number</label> <input type="text" name="apt" /><div class="clear"></div><br />
<label>Billing City</label> <input type="text" name="bcity" /><div class="clear"></div><br />
<label>Billing State</label> <input type="text" name="bstate" /><div class="clear"></div><br />
<label>Billing Zip Code</label> <input type="text" name="bzip" /><div class="clear"></div><br />
Choose Your Credit Card
<select>
  <option>Visa</option>
  <option>MasterCard</option>
  <option>Discover</option>
  <option>American Express</option>
</select><br /><br />
<label>Credit Card Number</label> <input type="text" name="ccnum" /><div class="clear"></div><br />
<label>Credit Card Expiration Date</label> <input type="text" name="ccexp" /><div class="clear"></div>
<div class="clear"></div>
</div>

<div id="shipping">
<h4>Shipping Info</h4>
<span>Form of address:<span>
<select name="saddress">
  <option value="Dr.">Dr.</option>
  <option value="Mr.">Mr.</option>
  <option value="Ms.">Ms.</option>
  <option value="Mrs.">Mrs.</option>
</select><br /><br />
<label>First Name</label><input type="text" name="sfname" /><div class="clear"></div><br />
<label>Last Name</label><input type="text" name="slname" /><div class="clear"></div><br />
<label>Shipping Address Line 1</label> <input type="text" name="sadd1" /><div class="clear"></div><br />
<label>Shipping Address Line 2</label> <input type="text" name="sadd2" /><div class="clear"></div><br />
<label>Shipping Address Line 3</label> <input type="text" name="sadd3" /><div class="clear"></div><br />
<label>Apartment Number</label> <input type="text" name="sapt" /><div class="clear"></div><br />
<label>Shipping City</label> <input type="text" name="scity" /><div class="clear"></div><br />
<label>Shipping State</label> <input type="text" name="sstate" /><div class="clear"></div><br />
<label>Shipping Zip Code</label> <input type="text" name="szip" /><div class="clear"></div><br />
</div>
<div class="clear"></div>

<input type="submit" id="submit" value="Submit Order" />
</form>
</div>

<footer>
<div><a href="index.html">Home</a> | <a href="photos.html">Photography</a></div>
<small>&copy; Jonathan Cohen 2012</small>
</footer>
</div>
</body>
</html>
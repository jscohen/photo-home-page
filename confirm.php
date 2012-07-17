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
	margin-left: 200px;
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
?>
</table>

<div id="container">
<div id="billing">
<h3>These photos will be billed to:</h3>
<table border="1"><tr><td><?php echo $_POST['baddress']; echo " "; echo $_POST['bfname']; echo " "; echo $_POST['blname'];?></td></tr>
<tr><td><?php echo $_POST["badd1"];?></td></tr>
<tr><td><?php echo $_POST["badd2"];?></td></tr>
<tr><td><?php echo $_POST["badd3"];?></td></tr>
<tr><td>Apartment Number <?php echo $_POST["apt"];?></td></tr>
<tr><td><?php echo $_POST["bcity"];?></td></tr>
<tr><td><?php echo $_POST["bstate"];?></td></tr>
<tr><td><?php echo $_POST["bzip"];?></td></tr>
</table>
</div>
<?php if($_POST['noship'] != 'checked') {
echo "<div id='shipping'>
<h3>These photos will be shipped to:</h3>
<table border='1'>"; echo "<tr><td>"; echo $_POST['saddress']; echo " "; echo $_POST['sfname']; echo " "; echo $_POST['slname']; echo "</td></tr>";
echo "<tr><td>"; echo $_POST["sadd1"]; echo "</td></tr>";
echo "<tr><td>"; echo $_POST["sadd2"]; echo "</td></tr>";
echo "<tr><td>"; echo $_POST["sadd3"]; echo "</td></tr>";
echo "<tr><td>Apartment Number"; echo $_POST["sapt"]; echo "</td></tr>";
echo "<tr><td>"; echo $_POST["scity"]; echo "</td></tr>";
echo "<tr><td>"; echo $_POST["sstate"]; echo "</td></tr>";
echo "<tr><td>"; echo $_POST["szip"]; echo "</td></tr>";

echo "</table></div>";
}
?>

</div>
<div class="clear"></div>
<h2>Thank you for using the site!</h2>

<footer>
<div><a href="index.html">Home</a> | <a href="photos.html">Photography</a></div>
<small>&copy; Jonathan Cohen 2012</small>
</footer>
</div>
</body>
</html>
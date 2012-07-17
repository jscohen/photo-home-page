<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Jonathan S. Cohen - Photography, Design and Development</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<style>
	h3 {
		text-align:center;
	}
	#form {
		width:600px;
		overflow:hidden;
        padding:10px;
		margin-left:400px;
	}
	
	label, input {
		float:left;
	}
	
	label {
		display:block;
		clear:left;
		width:125px;
	}
	#submit {
		margin-left:100px;
	}
	
	#unError, #pwError {
		color:#FF0000;
		font-weight:bold;
	}
</style>
</head>
<body>
<div id="body_wrapper">
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

<div class="break"></div>
<h3>Log In Page</h3>
<h3>Please enter your email/username and password.</h3>

<?php

if(isset($_SESSION["login_failed"])) {
	$var = $_SESSION['login_failed'];
	echo "<h3>$var</h3>";
}
?>
<div id="form">
<form method="post" name="signup" action="authenticate.php">
<label>Username/Email</label>
<input type="text" name="user_name" /><br />
<label>Password</label>
<input type="password" name="password" id="form2"/><br /><br />
<input type="submit" value="Submit" name="submit" id="submit" />
</form>
</div>

<footer>
<div><a href="index.html">Home</a> | <a href="photos.html">Photography</a></div>
<small>&copy; Jonathan Cohen 2012</small>
</footer>
</div>
</body>
</html>
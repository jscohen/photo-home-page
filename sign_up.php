<?php 
	$name = $_POST['user_name'];
	$pw = $_POST['password']
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Jonathan S. Cohen - Photography, Design and Development</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<script>



</script>
</head>
<body>
<div id="wrapper">
<header>
<h1>Jonathan S. Cohen</h1>
<h2 class="tagline">Photography, Design and Development</h2>

<nav>
  <ul>
    <li><a href="index.html" class="bordered">Home</a></li>
    <li><a href="photos.html" class="bordered">Photography</a></li>
  </ul>
</nav>
</header>

<div class="break"></div>

<h3>Please enter your email or a username and a password</h3>

<form method="post" action="<?php echo $PHP_SELF;?>">
<label>Username/Email</label><input type="text" name="user_name" maxlength="15" >
<label>Password</label><input type="password" name="password">
<input type="submit" value="submit" name="submit" onClick="checkForm()">
</form>

<footer>
<div><a href="index.html">Home</a> | <a href="photos.html">Photography</a></div>
</footer>
</div>
</body>
</html>
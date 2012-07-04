<?php 
	$name = $_POST['user_name'];
	$pw = $_POST['password']
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Jonathan S. Cohen - Photography, Design and Development</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<script src="js/jquery-1.7.2.min.js"></script>
<script>
function validate_un() {
	var ck_name = /^[A-Za-z]{3,8}$/;
	var ck_email = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	if ((document.signup.user_name.value.search(ck_name)==-1) && (document.signup.user_name.value.search(ck_email)==-1)) {
		$('#unError').html("Please enter a valid user name or email address");
	}
	else {
		$('#unError').html('');
	}
}

function validate_pw () {

	var ck_pw = /^[a-z0-9_-]{6,18}$/;

	if (document.signup.password.value.search(ck_pw)==-1) {
		$('#pwError').html("Please enter a valid password");
	}
	else {
		$('#pwError').html('');
	}
}

</script>
<style>
	h3 {
		text-align:center;
	}
	#form {
		width:300px;
		overflow:hidden;
        padding:10px;
		margin: 0 auto;
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
</style>
</head>
<body>
<div id="body_wrapper">
<header>
<h1>Jonathan S. Cohen</h1>
<h2 class="tagline">Photography, Design and Development</h2>

<nav>
  <ul id="nav">
    <li><a href="index.html" class="bordered">Home</a></li>
    <li><a href="photos.html" class="bordered">Photography</a></li>
  </ul>
</nav>
</header>

<div class="break"></div>

<h3>Please enter your email or a username from 3 to 8 characters and a password.  Your password must be at least 6 characters and less than 18.</h3>

<div id="form">
<form method="post" name="signup">
<label>Username/Email</label>
<input type="text" name="user_name" onkeyup="validate_un()" /><p id="unError"></p><br />
<label>Password</label>
<input type="password" name="password" id="form2" onkeyup="validate_pw()"/><p id="pwError"></p><br /><br />
<input type="submit" value="Submit" name="submit" id="submit" />
</form>
</div>

<footer>
<div><a href="index.html">Home</a> | <a href="photos.html">Photography</a></div>
</footer>
</div>
</body>
</html>
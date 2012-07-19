<?php 
	session_start();
	$name = $_POST['user_name'];
	$password = $_POST['password'];
	
	$un_exp = '/^[A-Za-z]{3,8}$/';
	$email_exp = '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/';
	$pw_exp = '/^[a-z0-9_-]{6,18}$/';
	
	if(!preg_match($un_exp, $name) && !preg_match($email_exp, $name)) {
		echo "<h1>Please enter a valid username or email!</h1>";
		header( 'Location: sign_up.html');
		exit();
	}
	
	if(!preg_match($pw_exp, $password)) {
		echo "<h1>Please enter a valid password!</h1>";
		header ('Location: sign_up.html');
		exit();
	}
	
	$con = mysql_connect("localhost", "root", "") or die(mysql_error()); 
	mysql_select_db("photo_store", $con) or die(mysql_error()); 
	mysql_query("INSERT INTO users(name, password) VALUES ('$name', '$password')"); 
	
	mysql_close($con);
	$_SESSION["name"] = $_POST['user_name'];
	header( 'Location: ../index.php' );
	exit();
?>
<?php
  session_start();
  require "database.mysql.php";

  $un = $_POST['user_name'];
  $pw =  $_POST['password'];
  
  if(isset($un) && isset($pw) && !empty($un) && !empty($pw)) {
    //$users = mysql_query("select count(1) numUsers from users where aes_decrypt(name,'key') = '$un' and aes_decrypt(password,'key') = '$pw'", $resource);
	$users = mysql_query("SELECT * FROM users WHERE name='$un' AND password='$pw'", $resource);
    $row = mysql_fetch_assoc($users);
  }
  else {
	echo "Please enter in a username and password!";
	header( 'Location: login.html');
  }  
  
  if ( count($row) == 3 ) {
    $_SESSION["name"] = $_POST['user_name'];
	echo "Welcome, ";
	echo($_SESSION["name"]);
	echo("!");
	header ( 'Location: index.php');
  } else {
	echo "Authentication Failed";
	header( 'Location: login.html');
  }

?>

  
  

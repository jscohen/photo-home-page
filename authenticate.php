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
    if(isset($_SESSION["login_failed"])) { unset($_SESSION["login_failed"])};
	header('Location: login.html');
	exit();
  }
  
  if ( count($row) == 3 ) {
    $_SESSION["name"] = $_POST['user_name'];
    if(isset($_SESSION["login_failed"])) { unset($_SESSION["login_failed"])};
	header ('Location: index.php');
	exit();
  } else {
    $_SESSION["login_failed"] = "Your username or password are incorrect";
	header('Location: login.php');
	exit();
  }
?>
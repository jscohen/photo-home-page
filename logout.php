<?php

session_start();
unset($_SESSION["login_failed"]);
session_destroy();
header ('Location: index.php');

?>
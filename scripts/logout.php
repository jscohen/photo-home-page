<?php

session_start();
unset($_SESSION["login_failed"]);
unset($_SESSION["cart"]);
unset($_SESSION["name"]);
session_destroy();
header ('Location: ../index.php');

?>
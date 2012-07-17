<?php

session_start();
$_SESSION['ids'] = array();
header('Location: shopping_cart.php');

?>
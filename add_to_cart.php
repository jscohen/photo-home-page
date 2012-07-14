<?php 
session_start();

$url = $_SERVER["QUERY_STRING"];

$parts = parse_url($url);


// find the photo id from the url
if(isset($parts['path'])) {
	$string = $parts['path'];
	$photo_id = preg_replace("/[^0-9]/", "", $parts['path']);
}

// get the photo id into our global array
array_push($_SESSION['ids'], $photo_id);

$_SESSION['ids'] = array_unique($_SESSION['ids']);

header( 'Location: shopping_cart.php');
exit();

?>
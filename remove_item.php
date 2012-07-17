<?php 
session_start();

$url = $_SERVER["QUERY_STRING"];

$parts = parse_url($url);


// find the photo id from the url
if(isset($parts['path'])) {
	$string = $parts['path'];
	$photo_id = preg_replace("/[^0-9]/", "", $parts['path']);
}

$count = 0;

foreach($_SESSION['ids'] as &$id) {	
	if($_SESSION['ids'][$count] == $photo_id) {
		unset($_SESSION['ids'][$count]);
	}
	
	$count++;
}

header('Location: shopping_cart.php');

?>
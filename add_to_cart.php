<?php

session_start();

$url = $_SERVER["QUERY_STRING"];
$parsed = array();

parse_str($url, $parsed);

print_r($parsed);

$_SESSION['cart'] = $parsed;

echo $_SESSION['cart'];
// making sure photos aren't added twice
/*
foreach($photo_ids as &$i) {
	if($photo_ids[i] == $id) {
		header ( 'Location: photos.php');
		exit();
	}
}

array_push($photo_ids, $id);

//header( 'Location: shopping_cart.php');

exit();
*/
?>
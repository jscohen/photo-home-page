<?php

session_start();
$id = $_POST['name'];

$photo_ids = array();

// making sure photos aren't added twice
foreach($photo_ids as &$i) {
	if($photo_ids[i] == $id) {
		header ( 'Location: photos.php');
		exit();
	}
}

array_push($photo_ids, $id);

$_SESSION['cart'] = $photo_ids;

header( 'Location: photos.php');

exit();

?>
<?php 

session_start();

require "database.mysql.php";

$costs = array();
$descs = array();

$prices = mysql_query("SELECT price FROM photos", $resource);
$descriptions = mysql_query("SELECT description FROM photos", $resource);

while($price = mysql_fetch_array($prices)) {
	array_push($costs,$price['price']);
}

while($desc = mysql_fetch_array($descriptions)) {
	array_push($descs,$desc['description']);
}

mysql_close($resource);

$_SESSION['prices'] = $costs;
$_SESSION['descriptions'] = $descs;

?>
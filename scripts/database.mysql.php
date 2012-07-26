<?php

$resource = mysql_connect("localhost", "root", "bleddavy") or die("Unable to connect" . mysql_error());

mysql_select_db("photo_store", $resource) or die("Unable to connect to database");

?>
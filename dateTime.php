<?php 

$format = $_GET['format'];

if (is_null($format))
	$format = "Y/m/d H:i:s";

$dateTime = date($format);

echo '['.$dateTime.']';

?>
<?php

$deviceId = $_POST['deviceId'];
$temperature = $_POST['temperature'];
$dateTime = $_POST['dateTime'];

echo '<h1>VictorVision</h1>';

$file = fopen($deviceId.'_log.csv', "a") or die("Arquivo não acessível");
$record = $dateTime.';'.$temperature."\n";

fwrite($file, $record);
fclose($file);

$file = fopen($deviceId.'_log.txt', "a") or die("Arquivo não acessível");
$record = $dateTime.';'.$temperature."\n";

fwrite($file, $record);
fclose($file);


echo 'deviceId='.$deviceId;

?>
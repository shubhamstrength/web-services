<?php
$ch = curl_init('http://localhost/web/create.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
var_dump($response);
?>

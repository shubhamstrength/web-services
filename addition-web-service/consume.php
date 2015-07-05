<?php

$ch = curl_init('http://localhost/test.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
var_dump($response); echo"</br>";
//var_dump(json_decode($response,true));
//$myarray = $response;
$json = json_decode($response, true);
curl_close($ch);


$ch1 = curl_init('http://localhost/res2.php');
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
$response1 = curl_exec($ch1);
var_dump($response1); echo"</br>";
$json1 = json_decode($response1, true);
curl_close($ch1);

 extract($json);
 extract($json1);
 
 echo $num1; echo "</br>";
 echo $num2; echo "</br>";
 echo $num3; 
 $add = $num1 + $num2 + $num3;
 echo "</br>";
 echo "SUm is : $add";
?>


<?php
function get_price($find){
$books= array(
"java" => 299,
"c" => 300,
"php" => 267
);
foreach($books as $book => $price)
{
if($book == $find)
{
return $price;
break;
}
}
}
?>

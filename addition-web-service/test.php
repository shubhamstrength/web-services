<?php
header("302 Found", true,302);
$data = array(
'num1' => '4',
'num2' => '5'
);

if(false !== strpos($_SERVER['HTTP_ACCEPT'], 'text/html')){
header('Content-Type: text/html');
echo "<pre>";
print_r($data);
echo "</pre>";
} else {
header('Content-Type: application/json');
echo json_encode($data);
}
?>

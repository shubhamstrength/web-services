<?php
if (isset($_POST['n1'])){
	$num1 = $_POST['n1'];
	$num2 = $_POST['n2'];
	$opr = $_POST['op'];
	// Send data as Name Value Pairs
	$post = 'n1='.$num1.'&n2='.$num2.'&op='.$opr;
	// sending where
	$url = "http://52.26.209.218/rec.php";
	//$url = "receiver2.php";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	echo $response;

}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<form name="form1" method="post" action="send.php">
  <p>number1:<input type="text" name="n1" id="num1" placeholder="enter number 1"></p>
  <p>number2:<input type="text" name="n2" id="num2" placeholder="enter number 2"></p>
  <p> operation: <input type="text" name="op" placeholder="enter operation"></p>
  <p> <input type="submit" name="submit" id="submit" value="Submit"></p>
</form>
</body>
</html>

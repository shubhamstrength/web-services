<?php
$var1 = $_POST['n1'];
$var2 = $_POST['n2'];
$var3 = $_POST['op'];
echo "you sent me $var1 and $var2 </br>";
switch($var3) {
	case '+':
	{
	$a = $var1+$var2;
	echo "$a";
	break;
	}
	case '-':
	{
	$s = $var1-$var2;
	echo "$s";
	break;
	}
	case '*':
	{
	$m = $var1*$var2;
	echo "$m";
	break;
	}
	case '/':
	{
	$d = $var1/$var2;
	echo "$d";
	break;
	}
	default:
	{
	echo "wrong operation selected";
	break;
}
	}
?>

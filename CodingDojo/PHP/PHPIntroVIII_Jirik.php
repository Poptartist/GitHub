<?php

$a = array(2, 4, 10, 16);
$b = array();
$factor = "";

function multiply($array, $factor) 
{
	foreach ($array as $value)
	{
		$b[] = ($value * $factor);
	}
echo "Array with factor ". $factor . "<br>";
var_dump($b);
echo "<br>";
}

multiply($a, 5);
multiply($a, 6);


?>

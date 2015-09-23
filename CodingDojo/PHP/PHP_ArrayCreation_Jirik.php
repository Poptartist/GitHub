<?php

$array = [];

for ($i=1; $i <= 20000; $i++) {
	if(is_float($i/2))
		array_push($array, $i);
}

var_dump($array);


?>

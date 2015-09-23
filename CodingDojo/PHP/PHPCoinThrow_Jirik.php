<?php

$sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02); 
$min = "";
$max = "";

function get_max_and_min(){
	for ($i = 0; $i < count($sample, i++)) {
		if ($sample[i] < $min)
			$min = $sample[i];
		elseif ($sample[i] > $max)
			$max = $sample[i];
	}
}
$output = get_max_and_min($sample)
var_dump($output);


?>
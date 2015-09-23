<?php


function get_min_max_array($array) {
$min = $array[0];
$max = $array[0];
$minmax = [];

for ($i = 0; $i < count($array); $i++){
	// $array = array("max" => NULL, "min" => NULL);

	if ($array[($i)] < ($min)) {
		$min = ($array[($i)]);}

	elseif ($array[($i)] > ($max)) {
		$max = ($array[($i)]);}
}

$minmax["min"] = $min;
$minmax["max"] = $max;
return "<h1>" .$minmax['min']. "</h1>";

}


$sample = array( 135, 2.4, 2.67, 1.23, 332, 2, 1.02); 
$output = get_min_max_array($sample); 
var_dump($output);

?>


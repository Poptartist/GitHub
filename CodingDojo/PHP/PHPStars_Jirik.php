<?php

function draw_stars($array) {

	foreach ($array as $stars) {
		for ($i = 0; $i < $stars; $i++){
			echo "*";
		}
		echo "<br>";
	}

}
function string_stars($array) {

	foreach ($array as $star) {
		if (is_int($star)){
			for ($i = 0; $i < $star; $i++) {
				echo "*";} // end of int for loop //
		} //end of int if ///
		elseif (is_string($star)) {
			for ($j = 0; $j < strlen($star); $j++) {
				echo strtolower($star[0]);} // end of string for loop //
		} // end of string elseif
		echo "<br>";
	} // end of foreach
} // End of function //
$x = array (4, 6, 1, 3, 5, 7, 25);
draw_stars($x);

$y = array (4, "Tom", 1, "Michael", 5, 7, "Jimmy Smith");
string_stars($y);



?>
<?php

$n = rand(50, 100);

function grade_tag($number) {

	if ($number < 70) {
		echo "<h1>Your Score:". $number . "/100</h1>";
		echo "<h2> D </h2>";
		}
	elseif ($number < 81) {
		echo "<h1>Your Score:". $number . "/100</h1>";
		echo "<h2> C </h2>";
		}
	elseif ($number < 91) {
		echo "<h1> Your Score:". $number . "/100</h1>";
		echo "<h2> B </h2>";
		}
	elseif ($number < 101) {
		echo "<h1> Your Score:". $number . "/100<h1>";
		echo "<h2> A </h2>";
		}
	

}

grade_tag($n)
?>

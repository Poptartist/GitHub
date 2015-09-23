<?php

for ($i=1; $i <= 2000; $i++) {
	echo 'Number is '. $i . '. ';

	if (is_float($i/2)) {
		echo'This is an odd number. ';
	} else {
		echo'This is an even number. ';
	}
	echo '<br>';
}

?>

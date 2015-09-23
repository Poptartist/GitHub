<?php

$users = array('first name' => "Michael", 'last_name' => "Choi");

function text_array($array) {
	echo 'There are '.count($array)." keys in this array: ";
	print_r(array_keys($array));
	echo '<br>';
	foreach ($array as $key => $value) {
		echo  "The value in the key ". $key ." is ". $value. ".<br>";
	}
}

text_array($users);

?>

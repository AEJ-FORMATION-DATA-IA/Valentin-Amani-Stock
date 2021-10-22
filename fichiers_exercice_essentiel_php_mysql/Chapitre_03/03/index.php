<?php

function writeLine($key, $val) {
	echo 'Key : ' . $key . ' value : ' . $val . '<br />'; 
}

$array = [0 => 'a', 1 => 'b', 2 => 'c'];

foreach ($array as $key => $value) {
	writeLine($key, $value);
}

?>
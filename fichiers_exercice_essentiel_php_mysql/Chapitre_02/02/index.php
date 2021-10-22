<?php

$array = [ 0 => 'a', 1 => 'b', 2 => 'c', 3 => 'd'];

$nb = count($array); 

if (in_array('a', $array)) {
	echo 'ok'; 
}

echo array_search('d', $array);


$array = ['d', 'c', 'a', 'b'];
sort($array);

foreach ($array as $key => $value) {
	var_dump($value);
}

var_dump(explode(',', 'a,b,c,d,e'));

var_dump(implode(',', ['d', 'c', 'a', 'b']));

$array = [ 15, 2, 560, 42];

echo min($array);
echo max($array);


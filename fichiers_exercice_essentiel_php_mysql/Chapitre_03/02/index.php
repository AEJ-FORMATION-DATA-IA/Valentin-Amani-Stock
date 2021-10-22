<?php

$iterator = 0;

while ($iterator < 10)
{
    echo $iterator;
    $iterator++;
}

for ($nb = 1; $nb <= 10; $nb++)
{
    echo 'Ligne n°' . $nb . '<br />';
}

$array = [0 => 'a', 1 => 'b', 2 => 'c'];

foreach ($array as $key => $value) {
	echo 'Key : ' . $key . ' value : ' . $value . '<br />';
}

?>
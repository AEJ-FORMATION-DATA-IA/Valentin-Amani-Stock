<?php

$a = 1;

if ($a == 1) {
    echo 'ok';
}

if ($a > 1) {
    echo 'ok';
}

if ($a >= 1) {
    echo 'ok';
}

if ($a != 1) {
    echo 'ok';
}

if ( ($a == 1) && (is_int($a)) ) {
    echo 'ok';
} else {
    echo 'ko';
}

$b = (($a == 1)) ? 'ok' : 'ko';
echo $b;

if ($a == 1) {
    echo 1;
} elseif ($a == 2) {
    echo 2;
} else {
    echo "> 3";
}

switch ($a)
{
    case 1:
        echo 1;
    break;
    case 2:
        echo 2;
    break;
    default:
        echo "> 3";
}

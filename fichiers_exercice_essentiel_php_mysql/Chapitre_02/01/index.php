<?php

define('DB', 'database');

if (defined('DB')) {
    echo 'ok';
} else {
    echo 'ko';
}

echo constant('DB');

$test = null;
if (isset($test)) {
    echo 'ok';
} else {
    echo 'ko';
}


$test = null;
if (empty($test)) {
    echo 'ok';
} else {
    echo 'ko';
}

$test = null;
if (!empty($test)) {
    echo 'ok';
} else {
    echo 'ko';
}
unset($test);

var_dump($test);
die();

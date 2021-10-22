<?php

$int = 11;
$string = 'string';
$array = [2, 'val'];
$float = 15.8212;
$boolean = true;
$date = new \DateTime();

var_dump($int);
var_dump($string);
var_dump($array);
var_dump($float);
var_dump($boolean);
var_dump($date);

if (is_bool($boolean)) {
    echo 'ok';
}
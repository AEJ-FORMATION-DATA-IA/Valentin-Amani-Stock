<?php

$date = new DateTime();

var_dump($date);

echo $date->format('d/m/Y');

echo time();

$date = new DateTime('2019-01-01');
echo $date->format('d/m/Y');

$date = new DateTime('2019-01-01', new DateTimeZone('Europe/Paris'));

echo $date->format('Y-m-d H:i:sP') . "\n";

$date->setTimezone(new DateTimeZone('America/Toronto'));

echo $date->format('Y-m-d H:i:sP') . "\n";
<?php

use shishkov\LinearEquation;
use shishkov\QuadroEquation;

include 'shishkov/LinearEquation.php';
include 'shishkov/QuadroEquation.php';

$obj = new LinearEquation();
$obj2 = new QuadroEquation();
$res = $obj2->roots(1, 5, 0);

echo($obj->func(6, 3) . PHP_EOL);
foreach ($res as $el) {
    echo $el;
}

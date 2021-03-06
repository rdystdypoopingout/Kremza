<?php

require_once __DIR__ . "/vendor/autoload.php";

use Shishkov\MyLog;
use Shishkov\QuadroEquation;
use Shishkov\ShishkovException;

MyLog::log("Program version: " . trim(file_get_contents("version")));

echo "Enter 3 parameters: " . PHP_EOL;
$a = readline("a = ");
$b = readline("b = ");
$c = readline("c = ");

MyLog::log("The equation: " . $a . "X^2 + " . $b . "X + " . $c . " = 0" . PHP_EOL);

try {
    $Square = new QuadroEquation();
    $res = $Square->solve($a, $b, $c);
    foreach ($res as $el) {
        MyLog::log($el);
    }
} catch (ShishkovException $e) {
    MyLog::log($e->getMessage() . PHP_EOL);
}

MyLog::write();

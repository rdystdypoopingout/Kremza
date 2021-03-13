<?php

use shishkov\shishkovException;
use shishkov\QuadroEquation;
use shishkov\MyLog;


include "core/EquationInterface.php";
include 'core/LogAbstract.php';
include 'core/LogInterface.php';
include "shishkov/LinearEquation.php";
include "shishkov/QuadroEquation.php";
include "shishkov/shishkovException.php";
include 'shishkov/MyLog.php';

$equation = new QuadroEquation();

try {
    $a = readline();
    $b = readline();
    $c = readline();

    MyLog::log("Enter equation is: ".$a."x^2 + ".$b."x + ".$c);

    $res = $equation->solve($a, $b, $c);
    if ($res) {
        MyLog::log("Its Quadro equation!");
    }
    $str = implode("; ", $res);
    MyLog::log("Roots: ". $str);
} catch (shishkovException $e) {
    MyLog::log($e->getMessage());
}

MyLog::write();
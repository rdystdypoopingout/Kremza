<?php

require 'shishkov/QuadroEquation.php';
require 'shishkov/MyLog.php';

$equation = new shishkov\QuadroEquation();
try {
    $res = $equation->solve(5, 14, 4);
    $str = implode("; ", $res);
    shishkov\MyLog::Instance()::log($str);
} catch (Error $error) {
    shishkov\MyLog::Instance()::log($error->getMessage());
}

shishkov\MyLog::Instance()::write();

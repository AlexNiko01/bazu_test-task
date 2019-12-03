<?php
include 'Calc.php';
$calc = new Calc;
$calc->subtraction(20);
$calc->add(20);
if (!$calc->getResult()) {
    $calc->add(42);
}
echo $calc->getResult();

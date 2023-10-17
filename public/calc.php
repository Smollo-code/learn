<?php

/*function multi (float|int|null $value1 = 5, float|int $value2 = 100) : float|int
{
    $value1 = $value1 ?? 100;


    return $value1 * $value2;
}

$value1 =  null ?? 5;
$value2 = null ?? 10;
echo multi($value1, $value2 === null ? 100 : $value2);

$result = $value1 = 5 ? 'ist 5' : 'nicht fünf';
echo $result;*/

require '../src/Calculator.php';

$num1 = $_POST['input_1'] ?? 0;
$num2 = ($_POST['input_2'] ?? 0);

if (!is_numeric($num1)) {
    $num1 = 0;
}

if (!is_numeric($num2)) {
    $num2 = 0;
}

$input1 = $num1;
$input2 = $num2;
$operator = (string) ($_POST['Operation'] ?? '*');

$calculator = new Calculator($input1, $input2, $operator);
$calculator->calculate();
$result = $calculator->getResult();
require 'rechner.php';




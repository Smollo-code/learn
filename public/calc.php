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

require '../src/OperationInterface.php';
require '../src/Division.php';
require '../src/Multi.php';
require '../src/Plus.php';
require '../src/Minus.php';
require '../src/Math.php';
require '../src/CalculatorInterface.php';
require '../src/Calculator.php';

/*try {
    $exception = new LogicException();
    throw $exception;
    echo 'Hallo Welt';
} catch (RuntimeException $exception) {
    echo $exception->getMessage();
} catch (LogicException $exception) {
    echo $exception->getMessage();
} finally {
    exit()/
}*/
$num1 = (float) ($_POST['input_1'] ?? 0);
$num2 = (float) ($_POST['input_2'] ?? 0);

if (!is_numeric($num1)) {
    $num1 = 0.0;
}

if (!is_numeric($num2)) {
    $num2 = 0.0;
}

if ($num2 === 0.0) {
    $num2 = 1.0;
}

function replaceComma(float $input) : float
{
    return $input[] = str_replace(',', '.', $input);
}

$input1 = $num1;
$input2 = $num2;
$operator = (string) ($_POST['Operation'] ?? '*');

$calculator = new Calculator();
$calculator->calculate($input1, $input2, $operator);
$result = $calculator->getResult();
require 'rechner.php';




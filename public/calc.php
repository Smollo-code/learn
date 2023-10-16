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


function calculate (float|int $input1, float|int $input2, string $operator) : float|int|string
{
    return match ($operator) {
        '+' => $input1 + $input2,
        '-' => $input1 - $input2,
        '*' => $input1 * $input2,
        '/' => $input1 / $input2,

    };
}

$input1 = (float) $_POST['input_1'];
$input2 = (float) $_POST['input_2'];
$operator = (string) $_POST['Operation'];

$result = calculate($input1, $input2, $operator);
require 'calc.html';
?>


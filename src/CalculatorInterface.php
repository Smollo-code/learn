<?php

Interface CalculatorInterface
{
    public function getResult() : float|int;

    public function calculate(float $input1, float $input2, string $operator) : void;

}

<?php

class Minus implements OperationInterface
{
    public function calculate(float $input1, float $input2): float
    {
        return $input1 - $input2;
    }
}
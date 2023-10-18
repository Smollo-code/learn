<?php

class Calculator extends Math implements CalculatorInterface
{
    private const MATH_PLUS = '+';
    private const MATH_MINUS = '-';
    private const MATH_MULTI = '*';
    private const MATH_DIVIDE = '/';

    private OperationInterface $plus;
    private OperationInterface $minus;
    private OperationInterface $multi;
    private OperationInterface $division;

    public function __construct(
    ) {
        $this->plus = new Plus();
        $this->minus = new Minus();
        $this->multi = new Multi();
        $this->division = new Division();

    }
    public function getResult() : float
    {
        return round($this->result, 2);
    }

    public function calculate(float $input1, float $input2, string $operator) : void
    {
        $this->result = match ($operator) {
            self::MATH_PLUS => $this->plus->calculate($input1, $input2),
            self::MATH_MINUS => $this->minus->calculate($input1, $input2),
            self::MATH_MULTI => $this->multi->calculate($input1, $input2),
            self::MATH_DIVIDE => $this->division->calculate($input1, $input2),
            default => 0.0,
        };
    }
}
<?php

class Calculator extends Math implements CalculatorInterface
{
    private const MATH_PLUS = '+';
    private const MATH_MINUS = '-';
    private const MATH_MULTI = '*';
    private const MATH_DIVIDE = '/';

    public function __construct(
        private float $input1,
        private float $input2,
        private string $operator
    ) {
    }
    public function getResult() : float
    {
        return round($this->result, 2);
    }

    public function calculate() : void
    {
        $this->result = match ($this->operator) {
            Calculator::MATH_PLUS => $this->plus($this->input1, $this->input2),
            Calculator::MATH_MINUS => $this->minus($this->input1, $this->input2),
            Calculator::MATH_MULTI => $this->multi($this->input1, $this->input2),
            Calculator::MATH_DIVIDE => $this->divide($this->input1, $this->input2),
            default => 0.0,
        };
    }
}
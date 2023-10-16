<?php
class Calculator
{
    private const MATH_PLUS = '+';
    private const MATH_MINUS = '-';
    private const MATH_MULTI = '*';
    private const MATH_DIVIDE = '/';

    private float|int $result = 0;

    public function __construct(
        private float|int $input1,
        private float|int $input2,
        private string $operator
    ) {
    }
    public function getResult() : float|int
    {
        return $this->result;
    }

    public function calculate() : void
    {
        match ($this->operator) {
            Calculator::MATH_PLUS => $this->plus(),
            Calculator::MATH_MINUS => $this->minus(),
            Calculator::MATH_MULTI => $this->multi(),
            Calculator::MATH_DIVIDE => $this->divide(),
            default => 0,
        };
    }
    private function plus() : void
    {
        $this->result = $this->input1 + $this->input2;
    }

    private function minus() : void
    {
        $this->result = $this->input1 - $this->input2;
    }

    private function multi() : void
    {
        $this->result = $this->input1 * $this->input2;
    }

    private function divide() : void
    {
        $this->result = $this->input1 / $this->input2;
    }
}
<?php

namespace mheap;

class BasicCalculator implements Calculator {

    protected $value = 0;

    public function add(float $n) {
        $this->value += $n;
    }

    public function subtract(float $n) {
        $this->value -= $n;
    }

    public function multiply(float $n) {
        $this->value *= $n;
    }

    public function divide(float $n) {
        $this->value /= $n;
    }

    public function result() : float {
        return $this->value;
    }

    public static function fromExpression(string $expression) {
        $c = new self();

        $parts = explode(" ", $expression);

        $map = [
            "+" => "add",
            "-" => "subtract",
            "*" => "multiply",
            "/" => "divide",
        ];

        $currentOperator = "+";
        foreach ($parts as $p) {
            if (!is_null($currentOperator)) {
                $c->{$map[$currentOperator]}($p);
                $currentOperator = null;
            } else {
                $currentOperator = $p;
            }
        }

        return $c;
    }
}

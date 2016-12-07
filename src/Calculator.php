<?php

namespace mheap;

interface Calculator {
    public function add (float $n);
    public function subtract (float $n);
    public function multiply (float $n);
    public function divide (float $n);

    public function result () : float;

    public static function FromExpression(string $expression);
}

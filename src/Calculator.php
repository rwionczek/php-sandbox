<?php
declare(strict_types=1);

namespace App;

class Calculator
{
    public function add(float $firstNumber, float $secondNumber): float
    {
        return $firstNumber + $secondNumber;
    }

    public function subtract(float $firstNumber, float $secondNumber): float
    {
        return $firstNumber - $secondNumber;
    }

    public function multiply(float $firstNumber, float $secondNumber): float
    {
        return $firstNumber * $secondNumber;
    }

    public function divide(float $firstNumber, float $secondNumber): float
    {
        return $firstNumber / $secondNumber;
    }
}

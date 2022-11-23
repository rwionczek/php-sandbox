<?php
declare(strict_types=1);

namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function test__add__should_sum_numbers(): void
    {
        self::assertSame(
            30.0,
            $this->calculator->add(10.0, 20.0),
        );
    }

    public function test__subtract__should_sum_numbers(): void
    {
        self::assertSame(
            -10.0,
            $this->calculator->subtract(10.0, 20.0),
        );
    }

    public function test__multiply__should_sum_numbers(): void
    {
        self::assertSame(
            200.0,
            $this->calculator->multiply(10.0, 20.0),
        );
    }

    public function test__divide__should_sum_numbers(): void
    {
        self::assertSame(
            0.5,
            $this->calculator->divide(10.0, 20.0),
        );
    }
}

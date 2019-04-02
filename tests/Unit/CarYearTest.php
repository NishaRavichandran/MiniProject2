<?php

namespace Tests\Unit;

use App\Car;
use phpDocumentor\Reflection\Types\Integer;
use PHPUnit\Framework\Constraint\IsType;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarYearTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarYearTestA()
    {
        $car = Car::all()->first();

        $year = $car->year;

        $this->assertTrue(is_numeric($year));
    }

    public function testCarYearTestB()
    {
        $car = Car::inrandomorder()->first();

        $year = (int) $car->year;

        $this->assertInternalType(IsType::TYPE_INT,$year);
    }

}

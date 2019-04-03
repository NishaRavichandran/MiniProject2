<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarMakeTest()
    {

            $car = Car::inrandomorder()->first();

            $carMake = array("Ford","Honda","Toyota");

            $this->assertContains($car->make, $carMake);
    }
}

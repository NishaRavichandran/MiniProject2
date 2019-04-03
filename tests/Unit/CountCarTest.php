<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CountCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountCarTest()
    {
        $car =Car::all();

        $carCount = count($car);

        $this->assertEquals(50, $carCount);
    }

}
<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarModelTestTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarModelTest()
    {
        $car = Car::first();

        $this->assertIsString($car->model);
    }
}

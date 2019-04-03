<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InsertCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertCarTest()
    {
            $car = new Car();

            $car->user_id='51';

            $car->make='Honda';

            $car->model='Sedan';

            $car->year='1988';

            $this->assertTrue($car->save());

    }
}

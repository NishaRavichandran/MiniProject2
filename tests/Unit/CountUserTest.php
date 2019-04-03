<?php

namespace Tests\Unit;

use App\User;
use PHPUnit\Framework\Constraint\Count;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CountUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountUserTest()
    {
        {
            $user = User::all();

            $userCount = Count($user);

            $this->assertEquals(50, $userCount);
        }
    }
}

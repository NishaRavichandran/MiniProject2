<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InsertUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertUserTest()
    {
        $user = new User();

        $user->name='Sunil';

        $user->email='sn438@example.com';

        $user->password='RtyUiOoXop';

        $this->assertTrue($user->save());


    }
}

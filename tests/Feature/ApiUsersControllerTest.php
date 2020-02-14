<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Airlock\Airlock;
use Tests\TestCase;

class ApiUsersControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_admin_can_list_users()
    {
        Airlock::actingAs(factory(User::class)
            ->create(['type' => 'admin']));

        factory(User::class, 100)->create();

        $this->get(route('api.users.index'))
            ->assertOk()
            ->assertExactJson(User::get()->toArray());
    }
}

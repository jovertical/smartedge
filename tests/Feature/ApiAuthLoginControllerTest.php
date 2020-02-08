<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Airlock\Airlock;
use Tests\TestCase;

class ApiAuthLoginControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_guest_can_login_using_valid_credentials()
    {
        $user = factory(User::class)->create();

        $data = [
            'email' => $user->email,
            'password' => 'password',
            'device_name' => $this->faker()->userAgent,
        ];

        $this->post(route('api.auth.login'), $data)
            ->assertOk()
            ->assertSeeText($user->tokens->first()->plainTextToken);
    }

    /** @test */
    public function a_logged_in_user_can_view_itself()
    {
        $user = Airlock::actingAs(factory(User::class)->create());

        $this->get(route('api.auth.user'))
            ->assertOk($user->original);
    }

    /** @test */
    public function a_logged_in_user_can_logout()
    {
        $user = Airlock::actingAs(factory(User::class)->create());

        $this->post(route('api.auth.logout'))->assertOk();

        $this->assertEquals([], $user->tokens->toArray());
    }
}

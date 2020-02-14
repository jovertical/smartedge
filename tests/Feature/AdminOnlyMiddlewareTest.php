<?php

namespace Tests\Feature;

use App\User;
use Auth;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Airlock\Airlock;
use Tests\TestCase;

class AdminOnlyMiddlewareTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function only_admins_can_visit_an_admin_route()
    {
        $user = Airlock::actingAs(factory(User::class)
            ->create(['type' => 'admin']));

        $this->post('admin-only')
            ->assertOk()
            ->assertSee("Hello {$user->name}!");
    }

    /** @test */
    public function non_admins_must_be_blocked_when_visiting_an_admin_route()
    {
        Airlock::actingAs(factory(User::class)->create());

        $this->post('admin-only')->assertStatus(403);
    }

    protected function setUp(): void
    {
        parent::setUp();

        \Route::middleware(['auth:airlock', 'admin'])
            ->post('admin-only', fn () => 'Hello ' . Auth::user()->name . '!');
    }
}

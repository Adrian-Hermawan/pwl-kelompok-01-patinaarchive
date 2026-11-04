<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminLoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_login_accepts_post_and_authenticates_a_valid_user(): void
    {
        $user = User::factory()->create([
            'email' => 'admin@example.com',
            'password' => 'secret-password',
        ]);

        $response = $this->post(route('login-admin.authenticate'), [
            'email' => 'admin@example.com',
            'password' => 'secret-password',
        ]);

        $response->assertRedirect(route('dashboard-admin'));
        $this->assertAuthenticatedAs($user);
    }

    public function test_admin_login_rejects_invalid_credentials(): void
    {
        User::factory()->create([
            'email' => 'admin@example.com',
            'password' => 'secret-password',
        ]);

        $response = $this->from(route('login-admin'))->post(route('login-admin.authenticate'), [
            'email' => 'admin@example.com',
            'password' => 'wrong-password',
        ]);

        $response->assertRedirect(route('login-admin'));
        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }
}

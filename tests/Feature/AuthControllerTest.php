<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_register_a_user()
    {
        $response = $this->postJson('/api/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password'
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('users', [
            'email' => 'test@example.com',
        ]);
    }

    /** @test */
    public function it_can_login_a_user()
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);

        $response = $this->postJson('/api/login', [
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'access_token',
            'token_type',
            'expires_in'
        ]);
    }

    /** @test */
    public function it_returns_error_if_credentials_are_incorrect()
    {
        $user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
        ]);

        $response = $this->postJson('/api/login', [
            'email' => 'test@example.com',
            'password' => 'wrong-password',
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['email']);
    }

    /** @test */
    public function it_can_get_authenticated_user_details()
    {
        $user = User::factory()->create();

        $token = auth('api')->login($user);

        $response = $this->getJson('/api/me', [
            'Authorization' => "Bearer $token"
        ]);

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'email' => $user->email,
        ]);
    }

    /** @test */
    public function it_can_logout_a_user()
    {
        $user = User::factory()->create();

        $token = auth('api')->login($user);

        $response = $this->postJson('/api/logout', [], [
            'Authorization' => "Bearer $token"
        ]);

        $response->assertStatus(200);
        $response->assertJson(['message' => 'Successfully logged out']);
    }

    /** @test */
    public function it_can_refresh_a_token()
    {
        $user = User::factory()->create();

        $token = auth('api')->login($user);

        $response = $this->postJson('/api/refresh', [], [
            'Authorization' => "Bearer $token"
        ]);

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'access_token',
            'token_type',
            'expires_in'
        ]);
    }
}

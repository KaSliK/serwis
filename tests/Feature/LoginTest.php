<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{
    protected $user;
    protected User $createdUser;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = [
            'email' => 'admins@example.com',
            'password' => 'admin'
        ];

    }

    public function testLoginUserWithInvalidCredentials(): void
    {
        $credentials = [
            'email' => 'user@example.com',
            'password' => 'incorrectpass'
        ];

        $this->post('login', $credentials)
        ->assertStatus(302)
        ->assertSessionHasErrors();

    }

    public function testLoginUserWithInvalidPassword(): void
    {
        $credentials = [
            'email' => $this->user['email'],
            'password' => 'incorrectpassword'
        ];

        $this->post('login', $credentials)
        ->assertStatus(302)
        ->assertSessionHasErrors();

    }

    public function testLoginUserWithInvalidEmail(): void
    {
        $credentials = [
            'email' => 'invalidemail@example.com',
            'password' => 'password'
        ];
        $response = $this->post('login', $credentials);

        $response->assertStatus(302);
    }

    public function testLoginUserWithValidCredentials(): void
    {
        $credentials = [
            'email' => $this->user['email'],
            'password' => $this->user['password']
        ];

        $this->followingRedirects()
        ->post('/login', $credentials)
        ->assertStatus(200)
        ->assertSee('Dane firmy')
        ->assertViewIs('backend.dashboard');
    }

    public function testLoginUserAfterCreateUser(): void
    {
        $this->createdUser = User::factory()
            ->create([
                'password' => bcrypt('password'),
            ]);

        $credentials = [
            'email' => $this->createdUser->email,
            'password' => 'password'
        ];

        $this->followingRedirects()
        ->post('/login', $credentials)
        ->assertStatus(200)
        ->assertSee('Dane firmy')
        ->assertViewIs('backend.dashboard');
    }

}

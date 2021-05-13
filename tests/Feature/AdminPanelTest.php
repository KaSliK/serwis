<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;

class AdminPanelTest extends TestCase
{
    protected User $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = User::factory()->create();
    }

    public function testMainPageWithoutLogin(): void
    {
        $this->followingRedirects()
            ->get('/')
            ->assertStatus(200)
            ->assertSee('Email')
            ->assertSee('Hasło')
            ->assertSee('Login');
    }

    public function testAccessToMainPageOfTheAdminPanelWithLoggedUser(): void
    {
        $this->actingAs(User::find(1))
            ->get('/')
            ->assertStatus(200)
            ->assertSee('Dane firmy')
            ->assertSee('Aktualizuj');
    }

    public function testAccessToClientsListOfTheAdminPanelWithLoggedUser(): void
    {
        $this->actingAs(User::find(1))
            ->get('/clients')
            ->assertStatus(200)
            ->assertSee('Klienci');
    }

    public function testAccessToItemsListOfTheAdminPanelWithLoggedUser(): void
    {
        $this->actingAs(User::find(1))
            ->get('/items')
            ->assertStatus(200)
            ->assertSee('Klienci');
    }

    public function testAccessToUsersListOfTheAdminPanelWithLoggedUser(): void
    {
        $this->actingAs(User::find(1))
            ->get('/users')
            ->assertStatus(200)
            ->assertSee('Klienci');
    }

    public function testLogout(): void
    {
        $this->followingRedirects()
            ->actingAs(User::find(1))
            ->post('/logout')
            ->assertStatus(200)
            ->assertSee('Hasło')
            ->assertSee('Email')
            ->assertSee('Login');
    }
}

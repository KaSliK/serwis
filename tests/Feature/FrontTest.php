<?php

namespace Tests\Feature;

use Tests\TestCase;

class FrontTest extends TestCase
{
    public function testMainPage(): void
    {
        $response = $this->get('/');

        $response->assertStatus(302);
    }

    public function testLoginPage(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testAuthorizeViewWithNoLogin(): void
    {
        $response = $this->get('/items');

        $response->assertStatus(302);
    }
}

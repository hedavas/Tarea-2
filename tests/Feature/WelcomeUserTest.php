<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    /** @test */
    public function bienvenido_users_nickname()
    {   
        $this->get('/saludo/david')
            ->assertStatus(200)
            ->assertSee("Tu nombre es: David y no tiene apodo");
    }
}

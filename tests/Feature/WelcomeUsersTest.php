<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('saludo/Andrés/Andixito')
        	->assertStatus(200)
        	->assertSee("Bienvenido Andrés, tu apodo es Andixito");
    }
    /** @test */
    function it_welcomes_users_without_nickname()
    {
        $this->get('saludo/Andrés')
        	->assertStatus(200)
        	->assertSee("Bienvenido Andrés");
    }
}

<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test */
    function it_loads_the_users_list_page()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Aqui aniràn els usuaris');
    }

   /** @test */
   function it_loads_the_users_details_page()
   {
   		$this->get('/usuarios/5')
   			->assertStatus(200)
   			->assertSee("Mostrant detalls de l'usuari: 5");	
   }
   /** @test */
   function it_loads_the_new_users_page()
   {
   		$this->get('/usuarios/nuevo')
   			->assertStatus(200)
   			->assertSee("Crear nuevo usuario");
   }
}

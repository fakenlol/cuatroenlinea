<?php

namespace Tests\Feature;
namespace App;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FichaTest extends TestCase
{
    /** @test */
    public function nuevaFicha()
    {
        //Test de creacion de ficha 🌕
        $ficha = new Ficha("🌕");
        $this->assertTrue($ficha->saberColor() == "🌕");

        //Test de creacion de ficha 🌎
        $ficha = new Ficha("🌎");
        $this->assertTrue($ficha->saberColor() == "🌎");
    }
}

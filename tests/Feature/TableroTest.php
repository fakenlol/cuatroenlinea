<?php

namespace Tests\Feature;
namespace App;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TableroTest extends TestCase
{
    /** @test */
    public function vertablero()
    {
        $fichas = array(
            array("🌚","🌚","🌚","🌚","🌚","🌚","🌚"),
            array("🌚","🌚","🌚","🌚","🌚","🌚","🌚"),
            array("🌚","🌚","🌚","🌚","🌚","🌚","🌚"),
            array("🌚","🌚","🌚","🌚","🌚","🌚","🌚"),
            array("🌚","🌚","🌚","🌚","🌚","🌚","🌚"),
            array("🌚","🌚","🌚","🌚","🌚","🌚","🌚")
        );

        $tablero = new Tablero();

        $this->assertEqualsCanonicalizing($tablero->devolverTablero(),$fichas);
    }
}

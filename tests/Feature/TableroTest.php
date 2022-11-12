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
    /** @test */
    public function posicion()
    {
        $tablero = new Tablero();

        $tablero->arrojar(1,"🌕");
        $tablero->arrojar(2,"🌎");
        $tablero->arrojar(1,"🌕");
        $tablero->arrojar(3,"🌎");
        $tablero->arrojar(2,"🌕");
        $tablero->arrojar(3,"🌎");
        $tablero->arrojar(3,"🌕");
        $tablero->arrojar(4,"🌎");
        $tablero->arrojar(4,"🌕");
        $tablero->arrojar(4,"🌎");
        $tablero->arrojar(4,"🌕");

        $new_tablero = $tablero->devolverTablero();

        //Cuatro en linea diagonal
        $this->assertTrue($new_tablero[0][0] == "🌕");
        $this->assertTrue($new_tablero[1][1] == "🌕");
        $this->assertTrue($new_tablero[2][2] == "🌕");
        $this->assertTrue($new_tablero[3][3] == "🌕");
    }
    /** @test */
    public function reinicio()
    {
        $tablero = new Tablero();

        $tablero->arrojar(1,"🌕");
        $tablero->arrojar(2,"🌎");
        $tablero->arrojar(1,"🌕");
        $tablero->arrojar(3,"🌎");
        $tablero->arrojar(2,"🌕");
        $tablero->arrojar(3,"🌎");
        $tablero->arrojar(3,"🌕");
        $tablero->arrojar(4,"🌎");
        $tablero->arrojar(4,"🌕");
        $tablero->arrojar(4,"🌎");
        $tablero->arrojar(4,"🌕");

        $tablero->reinicio();
        $empty_tablero = $tablero->devolverTablero();

        $this->assertTrue($empty_tablero == array());
    }
}

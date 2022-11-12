<?php

namespace Tests\Feature;
namespace App;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JuegoTest extends TestCase
{
    /** @test */
    public function vertical_test(){
        $juego = new Juego("Hernan","Claudio");
    }
}
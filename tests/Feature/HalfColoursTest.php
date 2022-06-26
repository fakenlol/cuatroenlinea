<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HalfColoursTest extends TestCase
{
    /** @test */
    public function sky_squares_amount()
    {
        $response = file_get_contents('https://cuatroenlinea.ddev.site/jugar/1717171717172626262626263535353535354545445454');

        $this->assertTrue(substr_count($response,'bg-sky-500') == 21);
    }
    public function red_squares_amount()
    {
        $response = file_get_contents('https://cuatroenlinea.ddev.site/jugar/1717171717172626262626263535353535354545445454');

        $this->assertTrue(substr_count($response,'bg-red-500') == 21);
    }
}
<?php

namespace Tests\Feature;
namespace App;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GridTest extends TestCase
{
    /** @test */
    public function grid_status()
    {
        $response = file_get_contents('https://cuatroenlinea.ddev.site/jugar/1717171717172626262626263535353535354545445454');

        $this->assertTrue(substr_count($response,'grid grid-gap-4 grid-cols-7 grid-rows-6 px-1 pb-1 border-l-4 border-r-4 border-b-4 border-green-800 shadow-lg shadow-emerald-900/50') == 1);
    }
}
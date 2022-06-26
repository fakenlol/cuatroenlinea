<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SquaresTest extends TestCase
{
    /** @test */
    public function gray_squares_amount()
    {
        $response = file_get_contents('https://cuatroenlinea.ddev.site/jugar/1');

        $this->assertTrue(substr_count($response,'bg-gray-200') == 41);
    }
    public function red_squares_amount()
    {
        $response = file_get_contents('https://cuatroenlinea.ddev.site/jugar/1');

        $this->assertTrue(substr_count($response,'bg-red-200') == 1);
    }
}
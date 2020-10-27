<?php

namespace Tests\Feature;

use App\Models\Boletas;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BoletasTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    function testListarBoletasBoletas()
    {
        $response = $this->get('/api/boletas');

        $response->assertStatus(200);

    }
}

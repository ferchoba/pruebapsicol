<?php

namespace Tests\Feature;

use App\Models\Compradores;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CompradorTest extends TestCase
{
    /**
     * Lista de compradores
     *
     * @return void
     */
    public function testListarCompradores()
    {
        $response = $this->get('/api/compradores');

        $response->assertStatus(200);
		

    }
	
	 public function testAgregarComprador()
    {
        $this->post('/api/compradores/', [
        'nombre' => 'Perencejo',
        'cedula' => '87653219',
        'clave' => '123456'
				])->assertRedirect('/compradores');
			
    }
	
	
}

<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Galeria;

class GaleriaApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_galeria()
    {
        $galeria = factory(Galeria::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/galerias', $galeria
        );

        $this->assertApiResponse($galeria);
    }

    /**
     * @test
     */
    public function test_read_galeria()
    {
        $galeria = factory(Galeria::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/galerias/'.$galeria->id
        );

        $this->assertApiResponse($galeria->toArray());
    }

    /**
     * @test
     */
    public function test_update_galeria()
    {
        $galeria = factory(Galeria::class)->create();
        $editedGaleria = factory(Galeria::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/galerias/'.$galeria->id,
            $editedGaleria
        );

        $this->assertApiResponse($editedGaleria);
    }

    /**
     * @test
     */
    public function test_delete_galeria()
    {
        $galeria = factory(Galeria::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/galerias/'.$galeria->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/galerias/'.$galeria->id
        );

        $this->response->assertStatus(404);
    }
}

<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\t_modelos;

class t_modelosApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_t_modelos()
    {
        $tModelos = factory(t_modelos::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/t_modelos', $tModelos
        );

        $this->assertApiResponse($tModelos);
    }

    /**
     * @test
     */
    public function test_read_t_modelos()
    {
        $tModelos = factory(t_modelos::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/t_modelos/'.$tModelos->id
        );

        $this->assertApiResponse($tModelos->toArray());
    }

    /**
     * @test
     */
    public function test_update_t_modelos()
    {
        $tModelos = factory(t_modelos::class)->create();
        $editedt_modelos = factory(t_modelos::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/t_modelos/'.$tModelos->id,
            $editedt_modelos
        );

        $this->assertApiResponse($editedt_modelos);
    }

    /**
     * @test
     */
    public function test_delete_t_modelos()
    {
        $tModelos = factory(t_modelos::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/t_modelos/'.$tModelos->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/t_modelos/'.$tModelos->id
        );

        $this->response->assertStatus(404);
    }
}

<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Aliado;

class AliadoApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_aliado()
    {
        $aliado = factory(Aliado::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/aliados', $aliado
        );

        $this->assertApiResponse($aliado);
    }

    /**
     * @test
     */
    public function test_read_aliado()
    {
        $aliado = factory(Aliado::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/aliados/'.$aliado->id
        );

        $this->assertApiResponse($aliado->toArray());
    }

    /**
     * @test
     */
    public function test_update_aliado()
    {
        $aliado = factory(Aliado::class)->create();
        $editedAliado = factory(Aliado::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/aliados/'.$aliado->id,
            $editedAliado
        );

        $this->assertApiResponse($editedAliado);
    }

    /**
     * @test
     */
    public function test_delete_aliado()
    {
        $aliado = factory(Aliado::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/aliados/'.$aliado->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/aliados/'.$aliado->id
        );

        $this->response->assertStatus(404);
    }
}

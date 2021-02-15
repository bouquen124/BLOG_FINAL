<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Rol;

class RolApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_rol()
    {
        $rol = factory(Rol::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/rols', $rol
        );

        $this->assertApiResponse($rol);
    }

    /**
     * @test
     */
    public function test_read_rol()
    {
        $rol = factory(Rol::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/rols/'.$rol->id
        );

        $this->assertApiResponse($rol->toArray());
    }

    /**
     * @test
     */
    public function test_update_rol()
    {
        $rol = factory(Rol::class)->create();
        $editedRol = factory(Rol::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/rols/'.$rol->id,
            $editedRol
        );

        $this->assertApiResponse($editedRol);
    }

    /**
     * @test
     */
    public function test_delete_rol()
    {
        $rol = factory(Rol::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/rols/'.$rol->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/rols/'.$rol->id
        );

        $this->response->assertStatus(404);
    }
}

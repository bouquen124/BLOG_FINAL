<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Ilustrable;

class IlustrableApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_ilustrable()
    {
        $ilustrable = factory(Ilustrable::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/ilustrables', $ilustrable
        );

        $this->assertApiResponse($ilustrable);
    }

    /**
     * @test
     */
    public function test_read_ilustrable()
    {
        $ilustrable = factory(Ilustrable::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/ilustrables/'.$ilustrable->id
        );

        $this->assertApiResponse($ilustrable->toArray());
    }

    /**
     * @test
     */
    public function test_update_ilustrable()
    {
        $ilustrable = factory(Ilustrable::class)->create();
        $editedIlustrable = factory(Ilustrable::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/ilustrables/'.$ilustrable->id,
            $editedIlustrable
        );

        $this->assertApiResponse($editedIlustrable);
    }

    /**
     * @test
     */
    public function test_delete_ilustrable()
    {
        $ilustrable = factory(Ilustrable::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/ilustrables/'.$ilustrable->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/ilustrables/'.$ilustrable->id
        );

        $this->response->assertStatus(404);
    }
}

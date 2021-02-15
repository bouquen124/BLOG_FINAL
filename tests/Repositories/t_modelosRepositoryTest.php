<?php namespace Tests\Repositories;

use App\Models\t_modelos;
use App\Repositories\t_modelosRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class t_modelosRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var t_modelosRepository
     */
    protected $tModelosRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->tModelosRepo = \App::make(t_modelosRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_t_modelos()
    {
        $tModelos = factory(t_modelos::class)->make()->toArray();

        $createdt_modelos = $this->tModelosRepo->create($tModelos);

        $createdt_modelos = $createdt_modelos->toArray();
        $this->assertArrayHasKey('id', $createdt_modelos);
        $this->assertNotNull($createdt_modelos['id'], 'Created t_modelos must have id specified');
        $this->assertNotNull(t_modelos::find($createdt_modelos['id']), 't_modelos with given id must be in DB');
        $this->assertModelData($tModelos, $createdt_modelos);
    }

    /**
     * @test read
     */
    public function test_read_t_modelos()
    {
        $tModelos = factory(t_modelos::class)->create();

        $dbt_modelos = $this->tModelosRepo->find($tModelos->id);

        $dbt_modelos = $dbt_modelos->toArray();
        $this->assertModelData($tModelos->toArray(), $dbt_modelos);
    }

    /**
     * @test update
     */
    public function test_update_t_modelos()
    {
        $tModelos = factory(t_modelos::class)->create();
        $faket_modelos = factory(t_modelos::class)->make()->toArray();

        $updatedt_modelos = $this->tModelosRepo->update($faket_modelos, $tModelos->id);

        $this->assertModelData($faket_modelos, $updatedt_modelos->toArray());
        $dbt_modelos = $this->tModelosRepo->find($tModelos->id);
        $this->assertModelData($faket_modelos, $dbt_modelos->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_t_modelos()
    {
        $tModelos = factory(t_modelos::class)->create();

        $resp = $this->tModelosRepo->delete($tModelos->id);

        $this->assertTrue($resp);
        $this->assertNull(t_modelos::find($tModelos->id), 't_modelos should not exist in DB');
    }
}

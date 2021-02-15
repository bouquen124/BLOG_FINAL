<?php namespace Tests\Repositories;

use App\Models\Aliado;
use App\Repositories\AliadoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class AliadoRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var AliadoRepository
     */
    protected $aliadoRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->aliadoRepo = \App::make(AliadoRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_aliado()
    {
        $aliado = factory(Aliado::class)->make()->toArray();

        $createdAliado = $this->aliadoRepo->create($aliado);

        $createdAliado = $createdAliado->toArray();
        $this->assertArrayHasKey('id', $createdAliado);
        $this->assertNotNull($createdAliado['id'], 'Created Aliado must have id specified');
        $this->assertNotNull(Aliado::find($createdAliado['id']), 'Aliado with given id must be in DB');
        $this->assertModelData($aliado, $createdAliado);
    }

    /**
     * @test read
     */
    public function test_read_aliado()
    {
        $aliado = factory(Aliado::class)->create();

        $dbAliado = $this->aliadoRepo->find($aliado->id);

        $dbAliado = $dbAliado->toArray();
        $this->assertModelData($aliado->toArray(), $dbAliado);
    }

    /**
     * @test update
     */
    public function test_update_aliado()
    {
        $aliado = factory(Aliado::class)->create();
        $fakeAliado = factory(Aliado::class)->make()->toArray();

        $updatedAliado = $this->aliadoRepo->update($fakeAliado, $aliado->id);

        $this->assertModelData($fakeAliado, $updatedAliado->toArray());
        $dbAliado = $this->aliadoRepo->find($aliado->id);
        $this->assertModelData($fakeAliado, $dbAliado->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_aliado()
    {
        $aliado = factory(Aliado::class)->create();

        $resp = $this->aliadoRepo->delete($aliado->id);

        $this->assertTrue($resp);
        $this->assertNull(Aliado::find($aliado->id), 'Aliado should not exist in DB');
    }
}

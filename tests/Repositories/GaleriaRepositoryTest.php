<?php namespace Tests\Repositories;

use App\Models\Galeria;
use App\Repositories\GaleriaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class GaleriaRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var GaleriaRepository
     */
    protected $galeriaRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->galeriaRepo = \App::make(GaleriaRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_galeria()
    {
        $galeria = factory(Galeria::class)->make()->toArray();

        $createdGaleria = $this->galeriaRepo->create($galeria);

        $createdGaleria = $createdGaleria->toArray();
        $this->assertArrayHasKey('id', $createdGaleria);
        $this->assertNotNull($createdGaleria['id'], 'Created Galeria must have id specified');
        $this->assertNotNull(Galeria::find($createdGaleria['id']), 'Galeria with given id must be in DB');
        $this->assertModelData($galeria, $createdGaleria);
    }

    /**
     * @test read
     */
    public function test_read_galeria()
    {
        $galeria = factory(Galeria::class)->create();

        $dbGaleria = $this->galeriaRepo->find($galeria->id);

        $dbGaleria = $dbGaleria->toArray();
        $this->assertModelData($galeria->toArray(), $dbGaleria);
    }

    /**
     * @test update
     */
    public function test_update_galeria()
    {
        $galeria = factory(Galeria::class)->create();
        $fakeGaleria = factory(Galeria::class)->make()->toArray();

        $updatedGaleria = $this->galeriaRepo->update($fakeGaleria, $galeria->id);

        $this->assertModelData($fakeGaleria, $updatedGaleria->toArray());
        $dbGaleria = $this->galeriaRepo->find($galeria->id);
        $this->assertModelData($fakeGaleria, $dbGaleria->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_galeria()
    {
        $galeria = factory(Galeria::class)->create();

        $resp = $this->galeriaRepo->delete($galeria->id);

        $this->assertTrue($resp);
        $this->assertNull(Galeria::find($galeria->id), 'Galeria should not exist in DB');
    }
}

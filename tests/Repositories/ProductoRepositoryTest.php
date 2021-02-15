<?php namespace Tests\Repositories;

use App\Models\Producto;
use App\Repositories\ProductoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ProductoRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ProductoRepository
     */
    protected $productoRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->productoRepo = \App::make(ProductoRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_producto()
    {
        $producto = factory(Producto::class)->make()->toArray();

        $createdProducto = $this->productoRepo->create($producto);

        $createdProducto = $createdProducto->toArray();
        $this->assertArrayHasKey('id', $createdProducto);
        $this->assertNotNull($createdProducto['id'], 'Created Producto must have id specified');
        $this->assertNotNull(Producto::find($createdProducto['id']), 'Producto with given id must be in DB');
        $this->assertModelData($producto, $createdProducto);
    }

    /**
     * @test read
     */
    public function test_read_producto()
    {
        $producto = factory(Producto::class)->create();

        $dbProducto = $this->productoRepo->find($producto->id);

        $dbProducto = $dbProducto->toArray();
        $this->assertModelData($producto->toArray(), $dbProducto);
    }

    /**
     * @test update
     */
    public function test_update_producto()
    {
        $producto = factory(Producto::class)->create();
        $fakeProducto = factory(Producto::class)->make()->toArray();

        $updatedProducto = $this->productoRepo->update($fakeProducto, $producto->id);

        $this->assertModelData($fakeProducto, $updatedProducto->toArray());
        $dbProducto = $this->productoRepo->find($producto->id);
        $this->assertModelData($fakeProducto, $dbProducto->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_producto()
    {
        $producto = factory(Producto::class)->create();

        $resp = $this->productoRepo->delete($producto->id);

        $this->assertTrue($resp);
        $this->assertNull(Producto::find($producto->id), 'Producto should not exist in DB');
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(rolseeder::class);
        $this->call(EstadosSeeder::class);
         
        $this->call(CategoriassSeeder::class);
        $this->call(postSeeder::class);
       
        $this->call(ClientesSeeder::class);
        $this->call(AliadosSeeder::class);
        $this->call(ServiciosSeeder::class);
        $this->call(ProductosSeeder::class);
    }
}

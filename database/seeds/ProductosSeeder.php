<?php

use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('productos')->insert([
            'estado_id' => '1',
            'categoria_id' => '1',
            'nombre' => 'Primer producto',
            'descripcion' => 'primer Esta es una descripciondel primer producto',
            'costo' => '123'
    
        ]);

        
        DB::table('productos')->insert([
            'estado_id' => '1',
            'categoria_id' => '1',
            'nombre' => 'segundo producto',
            'descripcion' => 'segundo Esta es una descripciondel primer producto',
            'costo' => '23'
    
        ]);

        
        DB::table('productos')->insert([
            'estado_id' => '1',
            'categoria_id' => '1',
            'nombre' => 'tercer producto',
            'descripcion' => 'tercer Esta es una descripciondel primer producto',
            'costo' => '638'
    
        ]);

        
        DB::table('productos')->insert([
            'estado_id' => '1',
            'categoria_id' => '1',
            'nombre' => 'Cuerto producto',
            'descripcion' => 'caurto Esta es una descripciondel primer producto',
            'costo' => '253'
    
        ]);

    }
}

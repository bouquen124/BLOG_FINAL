<?php

use Illuminate\Database\Seeder;

class CategoriassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'estado_id' => '1',
            'nombre' => 'categoria_1',
            'descripcion' => 'descripcion'
        ]);
        
        DB::table('categorias')->insert([
            'estado_id' => '1',
            'nombre' => 'categoria_2',
            'descripcion' => 'descripcion'
        ]);
        
        DB::table('categorias')->insert([
            'estado_id' => '1',
            'nombre' => 'categoria_3',
            'descripcion' => 'descripcion'
        ]);
        
        DB::table('categorias')->insert([
            'estado_id' => '1',
            'nombre' => 'categoria_4',
            'descripcion' => 'descripcion'
        ]);
 
    }
}

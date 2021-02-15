<?php

use Illuminate\Database\Seeder;

class ServiciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('servicios')->insert([
            'estado_id' => '1',
            'categoria_id' => '1',
            'nombre' => 'Primer servicio',
            'descripcion' => 'primer Esta es una descripciondel primer',
            'costo' => '256'
    
        ]);
        
        DB::table('servicios')->insert([
            'estado_id' => '1',
            'categoria_id' => '1',
            'nombre' => 'Segundo servicio',
            'descripcion' => 'segundo Esta es una descripciondel primer',
            'costo' => '556'
    
        ]);

        
        DB::table('servicios')->insert([
            'estado_id' => '1',
            'categoria_id' => '1',
            'nombre' => 'Tercer servicio',
            'descripcion' => 'tercer Esta es una descripciondel primer',
            'costo' => '856'
    
        ]);

        
        DB::table('servicios')->insert([
            'estado_id' => '1',
            'categoria_id' => '1',
            'nombre' => 'caurto servicio',
            'descripcion' => 'caurto Esta es una descripciondel primer',
            'costo' => '124'
    
        ]);
    
            
    
    }
}

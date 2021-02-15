<?php

use Illuminate\Database\Seeder;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        DB::table('estados')->insert([
            'nombre' => 'Activo'
        ]);
        
        DB::table('estados')->insert([
            'nombre' => 'Inactivo'
        ]);
        
        DB::table('estados')->insert([
            'nombre' => 'Suspendido'
        ]);
        
        DB::table('estados')->insert([
            'nombre' => 'Cancelado'
        ]);
 
    }
}

<?php

use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('clientes')->insert([
        'estado_id' => '1',        
        'nombre' => 'Juan',
        'descripcion' => 'Juan se esta describiendo',
        'direcion' => 'calle de juan',
        'correo' => 'correojuan@gmail.com',
        'telefono' => '95185296336'

        ]);

        
        DB::table('clientes')->insert([
        'estado_id' => '1',
        'nombre' => 'Pedro',
        'descripcion' => 'Pedro se esta describiendo',
        'direcion' => 'calle de pedro',
        'correo' => 'correopedro@gmail.com',
        'telefono' => '95185296336'
            
        ]);

        
        DB::table('clientes')->insert([
        'estado_id' => '1',
        'nombre' => 'Carlos',
        'descripcion' => 'Carlos se esta describiendo',
        'direcion' => 'calle de carlos',
        'correo' => 'correocarlos@gmail.com',
        'telefono' => '95185296336'
            
        ]);

        
        DB::table('clientes')->insert([
        'estado_id' => '1',
        'nombre' => 'Roberto',
        'descripcion' => 'Roberto se esta describiendo',
        'direcion' => 'calle de Roberto',
        'correo' => 'correoroberto@gmail.com',
        'telefono' => '95185296336'
            
        ]);


        
    }
}

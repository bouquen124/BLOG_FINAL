<?php

use Illuminate\Database\Seeder;

class AliadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('aliados')->insert([
        'estado_id' => '1',
        'nombre' => 'Andres_Aliado',
        'descripcion' => 'Andres Descripcion',
        'direcion' => 'Calle de Andres',
        'correo' => 'andres@gmail.com',
        'telefono' => '9518529641',
        'facebook' => 'andresfacebook',
        'twitter' => 'twwit',
        'instagram' => 'insta_andres'
    
        ]);

        
        
        DB::table('aliados')->insert([
            'estado_id' => '1',
            'nombre' => 'Ernesto_Aliado',
            'descripcion' => 'Ernesto Descripcion',
            'direcion' => 'Calle de Ernesto',
            'correo' => 'Ernesto@gmail.com',
            'telefono' => '9518529641',
            'facebook' => 'Ernestofacebook',
            'twitter' => 'twwit',
            'instagram' => 'insta_Ernesto'
        
        ]);


            
        
        DB::table('aliados')->insert([
            'estado_id' => '1',
            'nombre' => 'Saul_Aliado',
            'descripcion' => 'Saul Descripcion',
            'direcion' => 'Calle de Saul',
            'correo' => 'Saul@gmail.com',
            'telefono' => '9518529641',
            'facebook' => 'Saulfacebook',
            'twitter' => 'twwit',
            'instagram' => 'insta_Saul'
        
        ]);

            
        
        DB::table('aliados')->insert([
            'estado_id' => '1',
            'nombre' => 'Aruturo_Aliado',
            'descripcion' => 'Aruturo Descripcion',
            'direcion' => 'Calle de Aruturo',
            'correo' => 'Aruturo@gmail.com',
            'telefono' => '9518529641',
            'facebook' => 'Aruturofacebook',
            'twitter' => 'twwit',
            'instagram' => 'insta_Aruturo'
        
        ]);
    }
}

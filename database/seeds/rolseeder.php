<?php

use Illuminate\Database\Seeder;
 
class rolseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rols')->insert([
            'nombre'=>'root',
            'descripcion'=>'usuario maximo'
        ]);



        DB::table('rols')->insert([
            'nombre'=>'Admin',
            'descripcion'=>'usuario con privilegios'
        ]);



        DB::table('rols')->insert([
            'nombre'=>'invitado',
            'descripcion'=>'usuario sin privilegios'
        ]);

    }
}

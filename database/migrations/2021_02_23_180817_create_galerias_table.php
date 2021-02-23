<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGaleriasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galerias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ilustrable_id')->unsigned();
            $table->string('descripcion');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('ilustrable_id')->references('id')->on('ilustrables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('galerias');
    }
}

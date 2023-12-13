<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lineas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero');
            $table->decimal('precioboleto',10,2);
            $table->integer('empresa_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('empresa_id')->references('id')->on('empresas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('lineas');//
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTempoventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempoventas', function (Blueprint $table) {
            $table->increments('id');
            $table->double('precio',5,2);
            $table->integer('cantidad');
             $table->integer('idProducto')->unsigned();
            $table->foreign('idProducto')->references('id')->on('productos'); //   Equivalente a numeros reales con precisión, 7 digitos en total y 2 despues de el punto decimal
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tempoventas');
    }
}

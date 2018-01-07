<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallesComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_compras', function (Blueprint $table) {
            $table->increments('id');
            $table->double('preciocomp', 7, 2);  //   Equivalente a numeros reales con precisión, 7 digitos en total y 2 despues de el punto decimal
            $table->double('descompra', 3, 2);   //   Equivalente a numeros reales con precisión, 3 digitos en total y 2 despues de el punto decimal
            $table->integer('cancompra');        //Equivalente a numeros enteros
            $table->integer('idprods')->unsigned();
            $table->foreign('idprods')->references('id')->on('productos');
            $table->integer('idcomps')->unsigned();
            $table->foreign('idcomps')->references('id')->on('factura_compras');
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
        Schema::dropIfExists('detalles_compras');
    }
}

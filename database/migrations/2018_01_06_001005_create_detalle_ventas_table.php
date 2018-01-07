<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->increments('id');
             $table->string('nomProducto');
            $table->double('preVenta',5,2);
            //$table->string('');
            $table->Integer('cantidad');
            $table->integer('idfactura')->unsigned();
            $table->foreign('idfactura')->references('id')->on('factura_venta2s');
            $table->integer('idProducto')->unsigned();
            $table->foreign('idProducto')->references('id')->on('productos'); 
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
        Schema::dropIfExists('detalle_ventas');
    }
}

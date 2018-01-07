<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecPago');
            $table->double('pendiente',5,2);
            $table->double('monto',5,2);
            $table->double('mora',5,2);
            //$table->string('');
            $table->Integer('cuotas');
            $table->integer('idfactura')->unsigned();
            $table->foreign('idfactura')->references('id')->on('factura_venta2s');
            $table->boolean('estado')->default(true);
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
        Schema::dropIfExists('pagos');
    }
}

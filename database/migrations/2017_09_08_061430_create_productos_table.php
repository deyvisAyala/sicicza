<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomProducto');
            
             $table->integer('idMarca')->unsigned();
            $table->foreign('idMarca')->references('id')->on('marcas');
            $table->string('catProducto');
            $table->double('preProducto',5,2);  
            $table->boolean('estProducto')->default(true); 
            $table->integer('idProveedor')->unsigned();
            $table->foreign('idProveedor')->references('id')->on('proveedors');
            $table->Integer('stock'); 
            $table->Double('cPromedio', 7, 2)->default(0.00); 
            $table->Integer('existencia')->default(0); 
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
        Schema::dropIfExists('productos');
    }
}

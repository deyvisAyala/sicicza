<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomFamiliar');
            $table->string('telFamiliar');
            $table->string('dirFamiliar');
            $table->string('nomPersonal');
            $table->string('telPersonal');
            $table->string('dirPersonal');
            $table->integer('idCliente')->unsigned();
            $table->foreign('idCliente')->references('id')->on('clientes');
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
        Schema::dropIfExists('referencias');
    }
}

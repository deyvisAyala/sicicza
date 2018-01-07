<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuotas', function (Blueprint $table) {
            $table->increments('id');
             $table->date('fecha');
            $table->double('total',5,2);
            $table->double('monto',5,2);
            $table->double('mora',5,2);
            //$table->string('');
            //$table->Integer('cuotas');
            $table->integer('idpago')->unsigned();
            $table->foreign('idpago')->references('id')->on('pagos');
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
        Schema::dropIfExists('cuotas');
    }
}

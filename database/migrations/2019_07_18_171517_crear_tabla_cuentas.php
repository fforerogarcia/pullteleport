<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCuentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentas', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('tipocuenta',['1 - Ahorros','2 - Corriente']);
            $table->string('numerocuenta',20);
            $table->integer('entidad')->unsigned();
            $table->integer('tipodocumento_titular')->unsigned();
            $table->string('numerodocumento_titular',20);
            $table->string('nombres_titular',50);
            $table->string('apellidos_titular',50)->nullable();
            $table->timestamps();
            $table->foreign('entidad')->references('id')->on('entidades');
            $table->foreign('tipodocumento_titular')->references('id')->on('tiposdocumentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuentas');
    }
}

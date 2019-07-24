<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCuentasxinversionistas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuentasxinversionistas', function (Blueprint $table) {
            $table->integer('tipdoc')->unsigned();
            $table->string('numdoc');
            $table->integer('idcuenta')->unsigned();
            $table->boolean('activa')->default(true);
            $table->timestamps();

            $table->primary(['tipdoc','numdoc','idcuenta']);
            $table->foreign(['tipdoc','numdoc'])->references(['tipdoc','numdoc'])->on('inversionistas')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('idcuenta')->references('id')->on('cuentas')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuentasxinversionistas');
    }
}

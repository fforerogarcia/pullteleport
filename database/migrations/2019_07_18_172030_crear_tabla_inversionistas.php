<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaInversionistas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inversionistas', function (Blueprint $table) {
            $table->integer('tipdoc')->unsigned();
            $table->string('numdoc',20);
            $table->string('nombres',50);
            $table->string('apellidos',50)->nullable();
            $table->integer('tipdoc_repre')->unsigned();
            $table->string('numdoc_repre',20);
            $table->string('nombres_repre',50);
            $table->string('apellidos_repre',50)->nullable();
            $table->integer('ciudad_direccion')->unsigned();
            $table->string('direccion',50);
            $table->string('mail',50);
            $table->string('celular',50);

            $table->timestamps();
            $table->primary(['tipdoc','numdoc']);
            $table->foreign('tipdoc')->references('id')->on('tiposdocumentos')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('tipdoc_repre')->references('id')->on('tiposdocumentos')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('ciudad_direccion')->references('id')->on('ciudades')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inversionistas');
    }
}

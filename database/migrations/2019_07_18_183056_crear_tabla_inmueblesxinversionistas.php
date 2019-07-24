<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaInmueblesxinversionistas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmueblesxinversionistas', function (Blueprint $table) {
            $table->integer('tipdoc')->unsigned();
            $table->string('numdoc');
            $table->integer('inmueble')->unsigned();
            $table->decimal('participacion',5,2)->unsigned();
            $table->boolean('activo')->default(true);
            $table->timestamps();

            $table->primary(['tipdoc','numdoc','inmueble']);
            $table->foreign(['tipdoc','numdoc'])->references(['tipdoc','numdoc'])->on('inversionistas')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('inmueble')->references('numero')->on('inmuebles')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inmueblesxinversionistas');
    }
}

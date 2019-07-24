<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaInmuebles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->integer('numero')->unsigned();
            $table->enum('torre',['A','B']);
            $table->enum('tipo',['Oficina','Parqueadero']);
            $table->decimal('area',7,2)->unsigned();
            $table->decimal('coeficiente',20,17)->unsigned();
            $table->timestamps();
            $table->primary('numero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inmuebles');
    }
}

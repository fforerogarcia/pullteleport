<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaImpuestosxtipoinversionista extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impuestosxtipoinversionista', function (Blueprint $table) {
            $table->integer('tipoinversionista')->unsigned();
            $table->integer('impuesto')->unsigned();
            $table->decimal('valor',6,3)->unsigned();
            $table->timestamps();

            $table->primary(['tipoinversionista','impuesto']);
            $table->foreign('tipoinversionista')->references('id')->on('tipoinversionistas')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('impuesto')->references('id')->on('impuestos')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('impuestosxtipoinversionista');
    }
}

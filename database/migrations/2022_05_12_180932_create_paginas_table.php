<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaginasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paginas', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_pagina');
            $table->string('url');
            $table->dateTime('Fecha_inicio');
            $table->string('Dias_noserepiten');
            $table->dateTime('Fecha_final');
            $table->Time('Hora_inicio');
            $table->Time('Hora_final');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paginas');
    }
}

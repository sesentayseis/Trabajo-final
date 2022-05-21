<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_tareas', function (Blueprint $table) {
            $table->id();
            $table->string('Titulo_tarea');
            $table->string('Detalle_tarea')->nullable();
            $table->dateTime('Fecha')->nullable();
            $table->Time('Hora')->nullable();
            $table->string('Estado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_tareas');
    }
}

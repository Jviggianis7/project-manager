<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id('id');
            $table->string('Nombre');
            $table->string('Apellidos');
            $table->string('Direccion'); 
            $table->string('Telefono');
            $table->enum('Sexo', ['Masculino', 'Femenino']);
            $table->date('FechaNacimiento');
            $table->string('Profesion');
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
        Schema::dropIfExists('personas');
    }
};

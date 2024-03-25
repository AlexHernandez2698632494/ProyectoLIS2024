<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->integer('idEstudiante')->primary();
            $table->string('nombreEstudiante');
            $table->string('apellidoEstudiante');
            $table->string('duiEstudiante', 10);
            $table->string('telefonoEstudiante', 10);
            $table->text('correoEstudiante')->nullable();
            $table->text('carrera')->nullable();
            $table->text('direccion')->nullable();
            $table->integer('estadoEliminacion')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->integer('idInvitado')->primary();
            $table->string('NombreEvento');
            $table->text('lugar')->nullable();
            $table->date('fecha');
            $table->time('hora');
            $table->text('descripcion')->nullable();
            $table->string('precio', 8);
            $table->string('imagen');
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
        Schema::dropIfExists('eventos');
    }
}

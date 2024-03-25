<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrupoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupo', function (Blueprint $table) {
            $table->integer('idgrupo')->primary();
            $table->text('nombreInstitucion')->nullable();
            $table->string('telefono', 10);
            $table->text('descripcion')->nullable();
            $table->string('logo');
            $table->integer('ninos');
            $table->integer('ninas');
            $table->integer('acompanantes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupo');
    }
}

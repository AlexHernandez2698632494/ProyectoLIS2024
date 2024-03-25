<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministradorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrador', function (Blueprint $table) {
            $table->integer('idadministrador')->primary();
            $table->string('nombreAdministrador');
            $table->string('apellidoAdministrador');
            $table->string('duiAdministrador', 10);
            $table->string('telefonoAdministrador', 10);
            $table->text('correoAdministrador')->nullable();
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
        Schema::dropIfExists('administrador');
    }
}

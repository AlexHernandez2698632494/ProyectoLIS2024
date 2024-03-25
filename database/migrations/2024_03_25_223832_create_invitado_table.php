<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitado', function (Blueprint $table) {
            $table->integer('idInvitado')->primary();
            $table->string('nombreInvitado');
            $table->string('apellidoInvitado');
            $table->string('duiInvitado', 10);
            $table->string('telefonoInvitado', 10);
            $table->text('correoInvitado')->nullable();
            $table->text('direccionInvitado')->nullable();
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
        Schema::dropIfExists('invitado');
    }
}

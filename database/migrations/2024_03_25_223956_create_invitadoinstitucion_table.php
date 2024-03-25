<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvitadoinstitucionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitadoinstitucion', function (Blueprint $table) {
            $table->integer('idInvitadoInstitucion')->primary();
            $table->string('nombreInvitadoInstitucion');
            $table->string('apellidoInvitadoInstitucion');
            $table->string('duiInvitadoInstitucion', 10);
            $table->string('telefonoInvitadoInstitucion', 10);
            $table->text('correoInvitadoInstitucion')->nullable();
            $table->text('direccionInvitadoInstitucion')->nullable();
            $table->text('nombreinstitucion')->nullable();
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
        Schema::dropIfExists('invitadoinstitucion');
    }
}

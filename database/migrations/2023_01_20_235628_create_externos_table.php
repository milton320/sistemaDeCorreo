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
        Schema::create('externos', function (Blueprint $table) {
            $table->id();
            $table->string("nro");
            $table->string("titulo");
            $table->string("institucion_remitente");
            $table->string("persona_firmante");
            $table->string("asunto");
            $table->date("fecha_documento");
            $table->string("tipo_documento");
            $table->string("cite");
            $table->string("via");
            $table->string("responsable");
            $table->string("imagen");
            $table->date("fecha_ingreso");
            $table->string("observaciones");
            $table->integer("derivado");
            $table->unsignedBigInteger('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('externos');
    }
};

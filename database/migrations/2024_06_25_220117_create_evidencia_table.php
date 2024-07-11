<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('evidencias', function (Blueprint $table) {
            $table->increments('id_evidencia');
            $table->integer('id_aspecto')->unsigned();
            $table->bigInteger('id_usuario')->unsigned();
            $table->string('tipo_evidencia')->nullable();
            $table->date('fecha_carga')->nullable();
            $table->string('nombre_archivo')->nullable();
            $table->string('ruta_archivo')->nullable();
            $table->integer('id_origen')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evidencias');
    }
};

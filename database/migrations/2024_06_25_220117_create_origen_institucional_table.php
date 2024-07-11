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
        Schema::create('origenes_institucionales', function (Blueprint $table) {
            $table->increments('id_origen');
            $table->string('nombre_origen')->nullable();
            $table->string('responsable')->nullable();
            $table->string('correo_responsable')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('origenes_institucionales');
    }
};

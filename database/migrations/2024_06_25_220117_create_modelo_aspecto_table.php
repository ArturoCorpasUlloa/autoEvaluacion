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
        Schema::create('modelos_aspectos', function (Blueprint $table) {
            $table->increments('id_modelo_aspecto');
            $table->integer('id_modelo')->unsigned();
            $table->integer('id_aspecto')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modelos_aspectos');
    }
};

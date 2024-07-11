<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('aspectos', function (Blueprint $table) {
            $table->increments('id_aspecto');
            $table->string('nombre_aspecto')->nullable();
            $table->string('codigo_aspecto')->nullable();
            $table->integer('id_caracteristica')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aspectos');
    }
};

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
        Schema::table('aspectos', function (Blueprint $table) {
            $table->foreign('id_caracteristica')->references('id_caracteristica')->on('caracteristicas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('aspectos', function (Blueprint $table) {
            $table->dropForeign(['id_caracteristica']);
        });
    }
};

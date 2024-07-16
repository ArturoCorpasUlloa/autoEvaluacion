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
        Schema::table('evidencias', function (Blueprint $table) {
            $table->foreign('id_aspecto')->references('id_aspecto')->on('aspectos')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('id_usuario')->references('id')->on('users')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('id_origen')->references('id_origen')->on('origenes_institucionales')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('evidencias', function (Blueprint $table) {
            $table->dropForeign(['id_aspecto']);
            $table->dropForeign(['id_usuario']);
            $table->dropForeign(['id_origen']);
        });
    }
};

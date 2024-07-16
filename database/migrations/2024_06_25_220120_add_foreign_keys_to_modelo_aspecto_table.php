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
        Schema::table('modelos_aspectos', function (Blueprint $table) {
            $table->foreign('id_modelo')->references('id_modelo')->on('modelos_evaluacion')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign('id_aspecto')->references('id_aspecto')->on('aspectos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('modelos_aspectos', function (Blueprint $table) {
            $table->dropForeign(['id_modelo']);
            $table->dropForeign(['id_aspecto']);
        });
    }
};

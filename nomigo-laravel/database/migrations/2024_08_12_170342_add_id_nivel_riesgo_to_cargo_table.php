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
        Schema::table('cargo', function (Blueprint $table) {
            // Agregar la columna 'id_nivel_riesgo'
            $table->unsignedBigInteger('id_nivel_riesgo')->nullable();

            // Crear la llave foránea
            $table->foreign('id_nivel_riesgo')->references('id_nivel_riesgo')->on('nivel_riesgo')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cargo', function (Blueprint $table) {
            // Eliminar la llave foránea primero
            $table->dropForeign(['id_nivel_riesgo']);

            // Luego eliminar la columna 'id_nivel_riesgo'
            $table->dropColumn('id_nivel_riesgo');
        });
    }
};

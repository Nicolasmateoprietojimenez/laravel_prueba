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
        Schema::table('empleado', function (Blueprint $table) {
            // Agregar la columna 'id_rol'
            $table->unsignedBigInteger('id_rol')->nullable();

            // Crear la llave foránea
            $table->foreign('id_rol')->references('id_rol')->on('rol')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('empleado', function (Blueprint $table) {
            // Eliminar la llave foránea primero
            $table->dropForeign(['id_rol']);

            // Luego eliminar la columna 'id_rol'
            $table->dropColumn('id_rol');
        });
    }
};

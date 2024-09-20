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
        Schema::table('empresa', function (Blueprint $table) {
            // Agregar la columna 'id_empleado'
            $table->unsignedBigInteger('id_empleado')->nullable();

            // Crear la llave foránea
            $table->foreign('id_empleado')->references('id_empleado')->on('empleado')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('empresa', function (Blueprint $table) {
            // Eliminar la llave foránea primero
            $table->dropForeign(['id_empleado']);

            // Luego eliminar la columna 'id_empleado'
            $table->dropColumn('id_empleado');
        });
    }
};

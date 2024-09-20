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
        Schema::table('vinculacion', function (Blueprint $table) {
            // Agregar las columnas de llaves foráneas
            $table->unsignedBigInteger('id_cargo')->nullable();
            $table->unsignedBigInteger('id_tipo_vinculacion')->nullable();
            $table->unsignedBigInteger('id_empleado')->nullable();

            // Crear las llaves foráneas
            $table->foreign('id_cargo')->references('id_cargo')->on('cargo')->onDelete('set null');
            $table->foreign('id_tipo_vinculacion')->references('id_tipo_vinculacion')->on('tipo_vinculacion')->onDelete('set null');
            $table->foreign('id_empleado')->references('id_empleado')->on('empleado')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vinculacion', function (Blueprint $table) {
            // Eliminar las llaves foráneas primero
            $table->dropForeign(['id_cargo']);
            $table->dropForeign(['id_tipo_vinculacion']);
            $table->dropForeign(['id_empleado']);

            // Luego eliminar las columnas
            $table->dropColumn(['id_cargo', 'id_tipo_vinculacion', 'id_empleado']);
        });
    }
};

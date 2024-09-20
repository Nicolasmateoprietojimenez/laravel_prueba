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
        Schema::create('vinculacion', function (Blueprint $table) {
            $table->id('id_vinculacion');
            $table->string('nro_documento');
            // $table->foreignId('id_cargo')->constrained('cargo');
            $table->date('fecha_vinculacion');
            // $table->foreignId('id_tipo_vinculacion')->constrained('tipo_vinculacion');
            // $table->foreignId('id_empleado')->constrained('empleado');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vinculaciones');
    }
};

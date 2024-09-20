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
        Schema::create('tipo_nivel_riesgo', function (Blueprint $table) {
            $table->id('id_tipo_nivel_riesgo');
            $table->string('descp_tipo_nivel_riesgo');
            $table->decimal('porc_desc', 5, 2);
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_nivel_riesgo');
    }
};

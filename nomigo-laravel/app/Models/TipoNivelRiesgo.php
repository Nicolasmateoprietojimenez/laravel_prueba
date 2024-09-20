<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoNivelRiesgo extends Model
{
    use HasFactory;

    protected $table = 'tipo_nivel_riesgo'; // Nombre de la tabla
    protected $primaryKey = 'id_tipo_nivel_riesgo'; // Clave primaria

    protected $fillable = [
        'descp_tipo_nivel_riesgo',
        'porc_desc',
    ];

    public $timestamps = true; // Para campos created_at y updated_at
}

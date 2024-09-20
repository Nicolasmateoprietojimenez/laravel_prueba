<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresa'; // Nombre de la tabla
    protected $primaryKey = 'nit'; // Clave primaria
    public $incrementing = false; // Si la clave primaria no es incremental
    protected $keyType = 'string'; // Tipo de dato de la clave primaria

    protected $fillable = [
        'nit',
        'razon_social',
        'correo',
        'estado_sistema',
    ];

    public $timestamps = true; // Esto indica que la tabla tiene campos created_at y updated_at
}

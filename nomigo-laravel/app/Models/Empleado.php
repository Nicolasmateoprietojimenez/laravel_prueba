<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleado'; // Asegúrate de que el nombre de la tabla sea correcto
    protected $primaryKey = 'id_empleado'; // Especifica la clave primaria

    protected $fillable = [
        'nro_documento',
        'tipo_documento',
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'sexo',
        'estado_sistema',
        'telefono',
        'estado_civil',
        'correo',
        'contraseña',
        'id_rol',
    ];

    public $timestamps = true; // Cambia a false si no tienes columnas created_at y updated_at
}

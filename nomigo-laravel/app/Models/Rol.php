<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

    // Especificar el nombre de la tabla
    protected $table = 'rol'; 

    // Especificar el nombre de la clave primaria
    protected $primaryKey = 'id_rol';

    // Los atributos que son asignables en masa
    protected $fillable = [
        'descp_rol', 'permisos',
    ];

    // Si la clave primaria no es un incremento entero
    public $incrementing = true; // o false si no es autoincremental

    // Si la clave primaria no es de tipo integer
    protected $keyType = 'int';
}

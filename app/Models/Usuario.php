<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = 'usuarios'; // Nombre de la tabla en la base de datos
    public $timestamps = false; // Desactiva los timestamps si no los necesitas

    protected $fillable = [
        'nombre',
        'apellido_p',
        'apellido_m',
        'correo',
        'contrasenia',
        'numero',
        'fecha_nacimiento',
    ];
}

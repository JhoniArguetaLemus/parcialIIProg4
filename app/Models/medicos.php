<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicos extends Model
{
    protected $table = 'medicos';
    protected $primaryKey = 'id_medico';
    protected $fillable = ['id_medico', 'nombre', 'apellido', 'especialidad', 'horario_consultas', 'telefono', 'correo'];

    public $timestamps = false;
}

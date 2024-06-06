<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    protected $primaryKey = 'id_paciente';
    protected $table = 'paciente';

    protected $fillable = [ 'id_paciente','nombre', 'apellido', 'fecha_nacimiento', 'genero', 'direccion', 'telefono', 'correo'];

    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consultas extends Model
{
    protected $table = 'consultas';

    protected $fillable = ['id_consulta', 'fecha', 'hora', 'observaciones', 'id_paciente', 'id_medico'];

    public $timestamps = false;
}

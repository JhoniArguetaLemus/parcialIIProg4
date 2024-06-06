<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citas_medicas extends Model
{
    protected $primaryKey = 'id_cita';
    protected $table = 'citas_medicas';


    protected $fillable = [ 'id_paciente', 'nombre_paciente', 'nombre_medico', 'fecha_cita', 'comentarios'];

    public $timestamps = false;
}

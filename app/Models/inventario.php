<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventario extends Model
{
    protected $table = 'inventario';

    protected $fillable = ['id_medicamento', 'nombre_medicamento', 'cantidad_disponible', 'fecha_caducidad', 'descripcion'];

    public $timestamps = false;
}

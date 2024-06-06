<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $primaryKey = 'id_usuario';
    protected $table = 'usuarios';

    protected $fillable = [ 'usuario', 'contrasenna'];

    public $timestamps = false;
}

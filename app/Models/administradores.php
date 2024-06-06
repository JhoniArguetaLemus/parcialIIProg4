<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class administradores extends Model
{
    
    use Notifiable;

    // Define el campo que se utilizará para la autenticación
    public function getAuthIdentifierName()
    {
        return 'id_usuario';
    }

    protected $fillable = [
        'id_usuario', 'constrasenna',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

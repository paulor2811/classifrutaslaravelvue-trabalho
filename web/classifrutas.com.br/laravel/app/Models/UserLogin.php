<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserLogin extends Model
{
    protected $table = 'users_login';
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'email',
        'senha',
        'user_id',
        'grupo_usuario_id',
    ];
}

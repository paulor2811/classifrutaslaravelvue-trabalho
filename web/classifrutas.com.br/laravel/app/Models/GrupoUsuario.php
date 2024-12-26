<?php

namespace App\Models;

use App\Models\Shared\BaseModel;
use Illuminate\Database\Eloquent\Model;

class GrupoUsuario extends BaseModel
{
    protected $table = 'grupo_usuario';

    protected $fillable = [
        'nome',
        'user_id',
        'is_adm',
    ];

    public $timestamps = false; // Desativar timestamps automáticas
}

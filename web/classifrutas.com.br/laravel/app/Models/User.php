<?php

namespace App\Models;

use App\Traits\CanGetTableNameAndSchemaStatically;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use CanGetTableNameAndSchemaStatically;

    protected $fillable = [
        'tipo_usuario_id',
        'tipo_anunciante_id',
        'uuid',
        'name',
        'nome_fantasia',
        'email',
        'password',
    ];

    // Defina para true ou remova a linha, pois o valor padrão é true
    public $timestamps = true;

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }
}

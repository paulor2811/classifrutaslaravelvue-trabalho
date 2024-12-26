<?php

namespace App\Models;

use App\Models\Shared\BaseModel;

class Teste extends Shared\BaseModel
{

    protected $table = 'teste';
    public $guarded = ['array_enviado', 'array_teste'];
    public $timestamps = false;

}

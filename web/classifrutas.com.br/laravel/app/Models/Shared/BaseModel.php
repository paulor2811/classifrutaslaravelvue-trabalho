<?php

namespace App\Models\Shared;

use App\Traits\CanGetTableNameAndSchemaStatically;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use CanGetTableNameAndSchemaStatically;
}

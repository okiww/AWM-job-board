<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';
    protected $fillable = [
        'id',
        'name',
        'created_at',
        'deleted_at',
        'updated_at',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'state';
    protected $fillable = [
        'id',
        'id_country',
        'name',
        'created_at',
        'deleted_at',
        'updated_at',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class desktop extends Model
{
    //
    protected $table = 'desktops';
    protected $fillable = [
        'id',
        'code',
        'brand',
        'model',
        'processor',
        'ram',
        'storage',
        'status',
    ];
}

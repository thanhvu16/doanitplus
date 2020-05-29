<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = 'order';
    protected $fillable = [
        'id_sp',
        'id_customer',
        'name_sp',
        'sl',
        'total',
        'stt'
];
}

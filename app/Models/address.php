<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    protected $table = 'address_guarantee';
    protected $fillable = [
        'phone',
        'address',
        'date',
        'time_work'

];
}

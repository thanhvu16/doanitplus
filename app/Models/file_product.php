<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class file_product extends Model
{
    protected $table = 'products_file';
    protected $fillable = [
        'id_products ',
        'url'
];
}

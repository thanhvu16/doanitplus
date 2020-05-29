<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = 'comment';
    protected $fillable = [
        'cmt_email',
        'cmt_name',
        'cmt_content',
        'cmt_product'
];
}

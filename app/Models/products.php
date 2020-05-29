<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'pro_name',
        'pro_cate',
        'pro_price',
        'pro_img',
        'pro_Warranty',
        'pro_accessories',
        'pro_condition',
        'pro_promotion',
        'pro_decription',
        'pro_status',
        'pro_featured'
    ];
    public function procate()
    {
        return $this->belongsTo(category::class, 'pro_cate', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'price',
        'description'
    ];

    public function Categories()
    {
        return $this->belongsTo(Categories::class,'cate_id','id');
    }
}

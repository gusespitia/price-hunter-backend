<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'picture',
        'status',
        'presentation',
        'id_category',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function scrapingProducts()
    {
        return $this->hasMany(ScrapingProduct::class, 'id_product');
    }
}

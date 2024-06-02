<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScrapingProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'id_product',
        'id_store',
        'status',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'id_store');
    }

    public function prices()
    {
        return $this->hasMany(Price::class, 'scraping_products_id');
    }
}

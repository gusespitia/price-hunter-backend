<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'combo_id',
        'data',
        'price',
        'scraping_products_id',
    ];

    public function scrapingProduct()
    {
        return $this->belongsTo(ScrapingProduct::class, 'scraping_products_id');
    }
}

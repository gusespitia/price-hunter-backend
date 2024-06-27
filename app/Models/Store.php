<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url_base',
        'logo',
        'status',
    ];

    public function scrapingProducts()
    {
        return $this->hasMany(ScrapingProduct::class, 'id_store');
    }
}

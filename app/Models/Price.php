<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'data',
        'price',
        'presentation',
        'id_product',
        'id_store',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }

    public function store()
    {
        return $this->belongsTo(Store::class, 'id_store');
    }
}

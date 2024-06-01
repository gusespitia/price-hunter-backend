<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'category_name',   
    ];

    protected $guarded = [];
    public $timestamps = false;


    public function product(): HasMany
    {
        return $this->hasMany(Product::class, 'id_product_category', 'id');
    }
}

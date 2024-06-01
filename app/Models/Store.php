<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $table = 'stores';
    protected $primaryKey = 'id';
    protected $fillable = [
        'store_name',
        'store_url',
        'store_logo',
        'store_status'
    ];

    protected $guarded = [];
    public $timestamps = false;
}

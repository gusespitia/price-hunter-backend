<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Price;

class PriceSeeder extends Seeder
{
    public function run()
    {
        $prices = [
        ];

        foreach ($prices as $price) {
            Price::create($price);
        }
    }
}

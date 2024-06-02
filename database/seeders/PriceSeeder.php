<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Price;

class PriceSeeder extends Seeder
{
    public function run()
    {
        $prices = [
            [
                'combo_id' => 1,
                'data' => 'Fresh Milk',
                'price' => 1.29,
                'scraping_products_id' => 1,
            ],
            [
                'combo_id' => 2,
                'data' => 'Whole Wheat Bread',
                'price' => 2.49,
                'scraping_products_id' => 2,
            ],
            [
                'combo_id' => 3,
                'data' => 'Chicken Breast Fillets',
                'price' => 8.99,
                'scraping_products_id' => 3,
            ],
            [
                'combo_id' => 4,
                'data' => 'Red Apple',
                'price' => 2.99,
                'scraping_products_id' => 4,
            ],
            [
                'combo_id' => 5,
                'data' => 'Coca Cola 1L',
                'price' => 1.49,
                'scraping_products_id' => 5,
            ],
            [
                'combo_id' => 6,
                'data' => 'Frozen Margherita Pizza',
                'price' => 3.99,
                'scraping_products_id' => 6,
            ],
            [
                'combo_id' => 7,
                'data' => 'Spaghetti Pasta',
                'price' => 1.89,
                'scraping_products_id' => 7,
            ],
            [
                'combo_id' => 8,
                'data' => 'Dish Soap 500ml',
                'price' => 1.59,
                'scraping_products_id' => 8,
            ]
        ];

        foreach ($prices as $price) {
            Price::create($price);
        }
    }
}

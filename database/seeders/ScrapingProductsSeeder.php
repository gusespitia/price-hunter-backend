<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ScrapingProduct;

class ScrapingProductsSeeder extends Seeder
{
    public function run()
    {
        $scrapingProducts = [
            [
                'slug' => 'albert-heijn-milk',
                'id_product' => 1,
                'id_store' => 1,
                'status' => true,
            ],
            [
                'slug' => 'carrefour-bread',
                'id_product' => 2,
                'id_store' => 2,
                'status' => true,
            ],
            [
                'slug' => 'delhaize-chicken-breast',
                'id_product' => 3,
                'id_store' => 3,
                'status' => true,
            ],
            [
                'slug' => 'albert-heijn-apple',
                'id_product' => 4,
                'id_store' => 1,
                'status' => true,
            ],
            [
                'slug' => 'carrefour-coca-cola',
                'id_product' => 5,
                'id_store' => 2,
                'status' => true,
            ],
            [
                'slug' => 'delhaize-frozen-pizza',
                'id_product' => 6,
                'id_store' => 3,
                'status' => true,
            ],
            [
                'slug' => 'albert-heijn-pasta',
                'id_product' => 7,
                'id_store' => 1,
                'status' => true,
            ],
            [
                'slug' => 'carrefour-dish-soap',
                'id_product' => 8,
                'id_store' => 2,
                'status' => true,
            ]
        ];

        foreach ($scrapingProducts as $scrapingProduct) {
            ScrapingProduct::create($scrapingProduct);
        }
    }
}

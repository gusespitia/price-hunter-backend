<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Milk',
                'picture' => 'https://example.com/milk.jpg',
                'status' => true,
                'presentation' => 'ml',
                'id_category' => 2,
            ],
            [
                'name' => 'Bread',
                'picture' => 'https://example.com/bread.jpg',
                'status' => true,
                'presentation' => 'unit',
                'id_category' => 3,
            ],
            [
                'name' => 'Chicken Breast',
                'picture' => 'https://example.com/chicken_breast.jpg',
                'status' => true,
                'presentation' => 'kg',
                'id_category' => 4,
            ],
            [
                'name' => 'Apple',
                'picture' => 'https://example.com/apple.jpg',
                'status' => true,
                'presentation' => 'kg',
                'id_category' => 5,
            ],
            [
                'name' => 'Coca Cola',
                'picture' => 'https://example.com/coca_cola.jpg',
                'status' => true,
                'presentation' => 'ml',
                'id_category' => 1,
            ],
            [
                'name' => 'Frozen Pizza',
                'picture' => 'https://example.com/frozen_pizza.jpg',
                'status' => true,
                'presentation' => 'unit',
                'id_category' => 7,
            ],
            [
                'name' => 'Pasta',
                'picture' => 'https://example.com/pasta.jpg',
                'status' => true,
                'presentation' => 'kg',
                'id_category' => 6,
            ],
            [
                'name' => 'Dish Soap',
                'picture' => 'https://example.com/dish_soap.jpg',
                'status' => true,
                'presentation' => 'unit',
                'id_category' => 8,
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

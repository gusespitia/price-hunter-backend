<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'product_name' => 'Milk',
            'product_picture' => 'prueba',
            'product_weight' => '500 ml',
            'id_product_category' => 1,
        ]);
        Product::create([
            'product_name' => 'Wortel',
            'product_picture' => 'prueba',
            'product_weight' => '500 gr',
            'id_product_category' => 2,
        ]);
    }
}

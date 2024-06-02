<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Beverages',
            'Dairy',
            'Bakery',
            'Meat & Fish',
            'Fruits & Vegetables',
            'Pantry',
            'Frozen Foods',
            'Household Items'
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'status' => true,
            ]);
        }
    }
}

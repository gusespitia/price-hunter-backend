<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
           'Toiletries', 
           'Pets', 
           'Snacks', 
            'Dairy', 
            'Cereals', 
            'Baby', 
          'Coffee, tea',
           'Baking', 
         'Sauces', 
            'Pasta', 
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'status' => true,
            ]);
        }
    }
}

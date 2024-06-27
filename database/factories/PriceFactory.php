<?php

namespace Database\Factories;

use App\Models\Price;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class PriceFactory extends Factory
{
    protected $model = Price::class;

    public function definition()
    {
        return [
            'data' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 1, 100),
            'presentation' => $this->faker->word,
            'id_product' => Product::factory(),
            'id_store' => Store::factory(),
        ];
    }
}

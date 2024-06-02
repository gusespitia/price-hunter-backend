<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Store;

class StoreSeeder extends Seeder
{
    public function run()
    {
        $stores = [
            [
                'name' => 'Albert Heijn',
                'url_base' => 'https://www.ah.be',
                'logo' => 'https://www.ah.be/logo.png',
                'status' => true,
            ],
            [
                'name' => 'Carrefour',
                'url_base' => 'https://www.carrefour.eu',
                'logo' => 'https://www.carrefour.eu/logo.png',
                'status' => true,
            ],
            [
                'name' => 'Delhaize',
                'url_base' => 'https://www.delhaize.be',
                'logo' => 'https://www.delhaize.be/logo.png',
                'status' => true,
            ]
        ];

        foreach ($stores as $store) {
            Store::create($store);
        }
    }
}

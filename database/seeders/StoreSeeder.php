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
                'url_base' => 'https://www.ah.be/producten/product/',
                'logo' => 'https://logowik.com/content/uploads/images/albert-heijn9883.jpg',
                'status' => true,
            ],
            [
                'name' => 'Carrefour',
                'url_base' => 'https://www.carrefour.be/nl/',
                'logo' => 'https://upload.wikimedia.org/wikipedia/fr/thumb/3/3b/Logo_Carrefour.svg/884px-Logo_Carrefour.svg.png?20140607064500',
                'status' => true,
            ],
            [
                'name' => 'Delhaize',
                'url_base' => 'https://www.delhaize.be/nl/shop/',
                'logo' => 'https://cdn.worldvectorlogo.com/logos/delhaize-1.svg',
                'status' => true,
            ]
        ];

        foreach ($stores as $store) {
            Store::create($store);
        }
    }
}

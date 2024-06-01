<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Store::create([
            'store_name' => 'Colruyt',
            'store_url' => 'https://www.colruyt.be/nl/producten',
            'store_logo' => 'https://cdn.freebiesupply.com/logos/large/2x/colruyt-logo-png-transparent.png',
        ]);

    }
}

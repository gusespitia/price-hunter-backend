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
                'id' => 1,
                'name' => 'Nivea Men dry impact anti-transpirant roller',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393635363837?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '50 ml',
                'id_category' => 1,
                'weight' => '50',
            ],
            [
                'id' => 2,
                'name' => 'Colgate Tandpasta Sensation White',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393637393934?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '75 ml',
                'id_category' => 1,
                'weight' => '75',
            ],
            [
                'id' => 3,
                'name' => 'Ultra Doux Shampoo kamille bloemenhoning bel',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239383933373530?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '250 ml',
                'id_category' => 1,
                'weight' => '250',
            ],
            [
                'id' => 4,
                'name' => 'Sunlight Classic care shower & bath bel',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393931363531?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '680 ml',
                'id_category' => 1,
                'weight' => '680',
            ],
            [
                'id' => 5,
                'name' => 'Listerine Mondwater total care',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393430393133?revLabel=2&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '500 ml',
                'id_category' => 1,
                'weight' => '500',
            ],
            [
                'id' => 6,
                'name' => 'Whiskas Temptations kip & kaas kattensnacks',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303832313338?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '60 g',
                'id_category' => 2,
                'weight' => '60',
            ],
            [
                'id' => 7,
                'name' => 'Cesar Classic met rund',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239373933343439?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '150 g',
                'id_category' => 2,
                'weight' => '150',
            ],
            [
                'id' => 8,
                'name' => 'Purina ONE Junior 1-12 maanden rijk aan kip',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303432363433?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '800 g',
                'id_category' => 2,
                'weight' => '800',
            ],
            [
                'id' => 9,
                'name' => 'Sheba Classics pat met kip',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303135343134?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '85 g',
                'id_category' => 2,
                'weight' => '85',
            ],
            [
                'id' => 10,
                'name' => 'Felix Soup original 6-pack',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303534343234?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '6 x 48 g',
                'id_category' => 2,
                'weight' => '288',
            ],
            [
                'id' => 11,
                'name' => 'Lay\'s Oven baked naturel',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239373932383630?revLabel=2&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '150 g',
                'id_category' => 3,
                'weight' => '150',
            ],
            [
                'id' => 12,
                'name' => 'LU Tuc bake rolls sea salt',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303433343736?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '150 g',
                'id_category' => 3,
                'weight' => '150',
            ],
            [
                'id' => 13,
                'name' => 'Doritos Sweet chilli pepper',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393933393838?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '170 g',
                'id_category' => 3,
                'weight' => '170',
            ],
            [
                'id' => 14,
                'name' => 'Lay\'s Grills',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239373936313135?revLabel=3&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '125 g',
                'id_category' => 3,
                'weight' => '125',
            ],
            [
                'id' => 15,
                'name' => 'Cheetos Chipito kaas',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239373935363732?revLabel=4&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '125 g',
                'id_category' => 3,
                'weight' => '125',
            ],
            [
                'id' => 16,
                'name' => 'Alpro Haverdrink zonder suikers',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393837313331?revLabel=1&rendition=400x400_JPG_Q85&fileType=binary',
                'status' => true,
                'presentation' => '1 l',
                'id_category' => 4,
                'weight' => '1000',
            ],
            [
                'id' => 17,
                'name' => 'Activia Yoghurt vanille',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303831323433?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '4 x 125 g',
                'id_category' => 4,
                'weight' => '500',
            ],
            [
                'id' => 18,
                'name' => 'PHILADELPHIA GOAT CHEESE AND ROSEMARY 150g',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393933323238?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '150 g',
                'id_category' => 4,
                'weight' => '150',
            ],
            [
                'id' => 19,
                'name' => 'OIKOS GREEK YOGHURT 480g',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303639313731?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '480 g',
                'id_category' => 4,
                'weight' => '480',
            ],
            [
                'id' => 20,
                'name' => 'HiPRO Mousse chocola bel',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393334393331?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '200 g',
                'id_category' => 4,
                'weight' => '200',
            ],
            [
                'id' => 21,
                'name' => 'Kellogg\'s Tresor melk choco',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303735393736?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '410 g',
                'id_category' => 5,
                'weight' => '410',
            ],
            [
                'id' => 22,
                'name' => 'Kellogg\'s Mini\'s',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393635353932?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '215 g',
                'id_category' => 5,
                'weight' => '215',
            ],
            [
                'id' => 23,
                'name' => 'Quaker Cruesli chocolade',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303038383938?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '450 g',
                'id_category' => 5,
                'weight' => '450',
            ],
            [
                'id' => 24,
                'name' => 'Quakerranola nuts & seeds',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239373932393437?revLabel=2&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '450 g',
                'id_category' => 5,
                'weight' => '450',
            ],
            [
                'id' => 25,
                'name' => 'Jordans Simply crunchy honey bakedranola',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303639353030?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '700 g',
                'id_category' => 5,
                'weight' => '700',
            ],
            [
                'id' => 26,
                'name' => 'Pampers Baby dry pantsuierbroekjes maat 6',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303336353936?revLabel=2&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '20 pcs',
                'id_category' => 6,
                'weight' => '20',
            ],
            [
                'id' => 27,
                'name' => 'Lulu betterfood plet bel',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393332313334?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '175 g',
                'id_category' => 6,
                'weight' => '175',
            ],
            [
                'id' => 28,
                'name' => 'Organix Apple rice cake clouds 7m+',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393138383332?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '40 g',
                'id_category' => 6,
                'weight' => '40',
            ],
            [
                'id' => 29,
                'name' => 'Nestlé Yogolino aardbei 6m+',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303733383033?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '400 g',
                'id_category' => 6,
                'weight' => '400',
            ],
            [
                'id' => 30,
                'name' => 'Nutrilon 1 volledige zuigelingenvoeding 0-6m',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393036333438?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '800 g',
                'id_category' => 6,
                'weight' => '800',
            ],
            [
                'id' => 31,
                'name' => 'D&L Mayonaise light 10% td BEL',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303137383733?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '450 ml',
                'id_category' => 9,
                'weight' => '450',
            ],
            [
                'id' => 32,
                'name' => 'Lipton Black tea lemon',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393932323335?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '20 pcs',
                'id_category' => 7,
                'weight' => '20',
            ],
            [
                'id' => 33,
                'name' => 'Douwe Egberts Aroma rood oploskoffie',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303338353232?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '200 g',
                'id_category' => 7,
                'weight' => '200',
            ],
            [
                'id' => 34,
                'name' => 'Twinings Lady grey thee',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239363436303639?revLabel=2&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '25 pcs',
                'id_category' => 7,
                'weight' => '25',
            ],
            [
                'id' => 35,
                'name' => 'Nescafé Dolce Gusto Café au lait capsules',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303735343238?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '16 pcs',
                'id_category' => 7,
                'weight' => '16',
            ],
            [
                'id' => 37,
                'name' => 'Dr. Oetker Wafels mix BEL',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393134303833?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '400 g',
                'id_category' => 8,
                'weight' => '400',
            ],
            [
                'id' => 38,
                'name' => 'Boss roomrijstpap Bel',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303730343830?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '400 g',
                'id_category' => 8,
                'weight' => '400',
            ],
            [
                'id' => 39,
                'name' => 'Imperial Pudding vanille maxipack bel',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303137333331?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '350 g',
                'id_category' => 8,
                'weight' => '350',
            ],
            [
                'id' => 42,
                'name' => 'Manna chinese curry BEL',
                'picture' => 'https://static.ah.nl/dam/product/AHI_434d50323836313736?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '360 g',
                'id_category' => 9,
                'weight' => '360',
            ],
            [
                'id' => 43,
                'name' => 'Pauwels Andalouse bel',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393330313537?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '255 g',
                'id_category' => 9,
                'weight' => '255',
            ],
            [
                'id' => 44,
                'name' => 'Heinz Tomaten ketchup 50% minder suikers&zout',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303238343232?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '220 ml',
                'id_category' => 9,
                'weight' => '220',
            ],
            [
                'id' => 45,
                'name' => 'Uncle Ben\'s Zoetzuur BEL',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393730383439?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '450 g',
                'id_category' => 9,
                'weight' => '450',
            ],
            [
                'id' => 46,
                'name' => 'Soubry Al Dente capellini 375 gr',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303137313133?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '375 g',
                'id_category' => 10,
                'weight' => '375',
            ],
            [
                'id' => 47,
                'name' => 'De Cecco Spaghetti Nr. 12',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239383939393833?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '500 g',
                'id_category' => 10,
                'weight' => '500',
            ],
            [
                'id' => 48,
                'name' => 'La Molisana Spaghetti',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239363736363536?revLabel=5&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '500 g',
                'id_category' => 10,
                'weight' => '500',
            ],
            [
                'id' => 51,
                'name' => 'De Cecco Fusilli nr34',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239383939393835?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '500 g',
                'id_category' => 10,
                'weight' => '500',
            ],
            [
                'id' => 55,
                'name' => 'Bosto Mediterraneo risotto en paellarijst bel',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239373035343737?revLabel=2&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '500 g',
                'id_category' => 10,
                'weight' => '500',
            ],
            [
                'id' => 58,
                'name' => 'Listerine Advanced white',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393430393230?revLabel=2&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '500 ml',
                'id_category' => 1,
                'weight' => '500',
            ],
            [
                'id' => 59,
                'name' => 'Axe Dark temptation anti-transpirant spray',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303831353635?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '150 ml',
                'id_category' => 1,
                'weight' => '150',
            ],
            [
                'id' => 60,
                'name' => 'Syoss Repair therapy shampoo',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239373635353238?revLabel=2&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '440 ml',
                'id_category' => 1,
                'weight' => '440',
            ],
            [
                'id' => 61,
                'name' => 'Gourmet Gold mousse met kip',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303539333439?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '85 g',
                'id_category' => 2,
                'weight' => '85',
            ],
            [
                'id' => 62,
                'name' => 'Catisfactions Kattensnack kip',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303539363737?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '60 g',
                'id_category' => 2,
                'weight' => '60',
            ],
            [
                'id' => 63,
                'name' => 'Purina ONE Sterilcat rijk aan rund',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303930303130?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '800 g',
                'id_category' => 2,
                'weight' => '800',
            ],
            [
                'id' => 64,
                'name' => 'Perfect fit Senior 7+ kip',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393437333230?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '750 g',
                'id_category' => 2,
                'weight' => '750',
            ],
            [
                'id' => 65,
                'name' => 'Frolic Hondenbrokken mini gevogelte & groente',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303036313130?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '1000 g',
                'id_category' => 2,
                'weight' => '1000',
            ],
            [
                'id' => 66,
                'name' => 'Lay\'s Bugles nacho cheese',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239373936313338?revLabel=3&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '125 g',
                'id_category' => 3,
                'weight' => '125',
            ],
            [
                'id' => 67,
                'name' => 'Lay\'s Max salt & black pepper',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239383437353731?revLabel=2&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '185 g',
                'id_category' => 3,
                'weight' => '185',
            ],
            [
                'id' => 69,
                'name' => 'Lay\'s Pickles',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239383837363632?revLabel=3&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '200 g',
                'id_category' => 3,
                'weight' => '200',
            ],
            [
                'id' => 70,
                'name' => 'Pringles Original',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303031353532?revLabel=3&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '165 g',
                'id_category' => 3,
                'weight' => '165',
            ],
            [
                'id' => 71,
                'name' => 'Pringles Paprika',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393835323236?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '165 g',
                'id_category' => 3,
                'weight' => '165',
            ],
            [
                'id' => 72,
                'name' => 'Pringles Sour cream & onion',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393836363237?revLabel=4&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '165 g',
                'id_category' => 3,
                'weight' => '165',
            ],
            [
                'id' => 74,
                'name' => 'Pringles Hot & spicy',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303035373434?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '165 g',
                'id_category' => 3,
                'weight' => '165',
            ],
            [
                'id' => 77,
                'name' => 'Alpro Plantaardig variatie kers',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393837303332?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '500 g',
                'id_category' => 4,
                'weight' => '500',
            ],
            [
                'id' => 78,
                'name' => 'Alpro This is not m*lk drink vol',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393837323435?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '1000 ml',
                'id_category' => 4,
                'weight' => '1000',
            ],
            [
                'id' => 79,
                'name' => 'Philadelphia Knoflook & fijne kruiden',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393239333138?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '185 g',
                'id_category' => 4,
                'weight' => '185',
            ],
            [
                'id' => 80,
                'name' => 'Oikos Natuur 0% bel',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239373035323937?revLabel=2&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '480 g',
                'id_category' => 4,
                'weight' => '480',
            ],
            [
                'id' => 81,
                'name' => 'Oatly! Haver barista edition',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393639353232?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '500 ml',
                'id_category' => 4,
                'weight' => '500',
            ],
            [
                'id' => 84,
                'name' => 'Kellogg\'s Rice krispies',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393631313933?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '360 g',
                'id_category' => 5,
                'weight' => '360',
            ],
            [
                'id' => 85,
                'name' => 'Kellogg\'s Extra pure chocolade en hazelnoten',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393631373237?revLabel=2&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '375 g',
                'id_category' => 5,
                'weight' => '375',
            ],
            [
                'id' => 87,
                'name' => 'D&L Cocktail whiskey saus bel',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303931333137?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '300 ml',
                'id_category' => 9,
                'weight' => '300',
            ],
            [
                'id' => 88,
                'name' => 'D&L Béarnaise bel',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303931323139?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '300 ml',
                'id_category' => 9,
                'weight' => '300',
            ],
            [
                'id' => 89,
                'name' => 'Heinz Tomato Ketchup Bio',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239383733363731?revLabel=2&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '500 ml',
                'id_category' => 9,
                'weight' => '500',
            ],
            [
                'id' => 90,
                'name' => 'Vandemoortele Vinaigrette light fijne kruiden bel',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303035353933?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '450 ml',
                'id_category' => 9,
                'weight' => '450',
            ],
            [
                'id' => 91,
                'name' => 'Zeisner Curry Ketchup bel',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303139343436?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '425 ml',
                'id_category' => 9,
                'weight' => '425',
            ],
            [
                'id' => 92,
                'name' => 'Lipton Green tea intense mint',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393830313933?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '20 pcs',
                'id_category' => 7,
                'weight' => '20',
            ],
            [
                'id' => 93,
                'name' => 'Lipton Black tea tropical fruit',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393839383537?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '20 pcs',
                'id_category' => 7,
                'weight' => '20',
            ],
            [
                'id' => 94,
                'name' => 'Starbucks Nespresso house blend lungo capsules',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303332353936?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '10 pcs',
                'id_category' => 7,
                'weight' => '10',
            ],
            [
                'id' => 95,
                'name' => 'Starbucks Dolce gusto Madagaskar vanilla capsules',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303534313035?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '12 pcs',
                'id_category' => 7,
                'weight' => '12',
            ],
            [
                'id' => 96,
                'name' => 'Yogi Tea Ginger orange with vanilla',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303137353639?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '17 pcs',
                'id_category' => 7,
                'weight' => '17',
            ],
            [
                'id' => 97,
                'name' => 'Anco Patisseriebloem bel',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303137313534?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '1000 g',
                'id_category' => 8,
                'weight' => '1000',
            ],
            [
                'id' => 102,
                'name' => 'Oral-B 3D White luxe perfection tandpasta',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393636323537?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '75 ml',
                'id_category' => 1,
                'weight' => '75',
            ],
            [
                'id' => 103,
                'name' => 'Oral-B Pro-repair original tandpasta',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393636333331?revLabel=2&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '75 ml',
                'id_category' => 1,
                'weight' => '75',
            ],
            [
                'id' => 104,
                'name' => 'Quaker Zero sugar added cocoa & banana',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303331363138?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '400 g',
                'id_category' => 5,
                'weight' => '400',
            ],
            [
                'id' => 105,
                'name' => 'Quaker Cruesli 4 noten',
                'picture' => 'https://static.ah.nl/dam/product/AHI_4354523130303037373530?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '400 g',
                'id_category' => 5,
                'weight' => '400',
            ],
            [
                'id' => 106,
                'name' => 'Quaker Cruesli granola original',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239373932393531?revLabel=2&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '450 g',
                'id_category' => 5,
                'weight' => '450',
            ],
            [
                'id' => 107,
                'name' => 'Kellogg\'s Cornflakes',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393235323434?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '375 g',
                'id_category' => 5,
                'weight' => '375',
            ],
            [
                'id' => 108,
                'name' => 'Lipton Black tea forest fruit',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239393931393235?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '20 pcs',
                'id_category' => 7,
                'weight' => '20',
            ],
            [
                'id' => 109,
                'name' => 'De Cecco Penne Rigate Nr. 41',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239383939393836?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '500 g',
                'id_category' => 10,
                'weight' => '500',
            ],
            [
                'id' => 110,
                'name' => 'De Cecco Linguine nr7',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239383939393831?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '500 g',
                'id_category' => 10,
                'weight' => '500',
            ],
            [
                'id' => 111,
                'name' => 'De Cecco Farfalle nr93',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239383939393839?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '500 g',
                'id_category' => 10,
                'weight' => '500',
            ],
            [
                'id' => 112,
                'name' => 'De Cecco Orecchiette',
                'picture' => 'https://static.ah.nl/dam/product/AHI_43545239383939393838?revLabel=1&rendition=800x800_JPG_Q90&fileType=binary',
                'status' => true,
                'presentation' => '500 g',
                'id_category' => 10,
                'weight' => '500',
            ],
            
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

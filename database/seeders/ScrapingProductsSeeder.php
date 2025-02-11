<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ScrapingProduct;

class ScrapingProductsSeeder extends Seeder
{
    public function run()
    {
        $scrapingProducts = [
            [1,'wi42801',1,1,1,'2024-06-02 15:47:15','2024-06-02 16:26:41'],
            [2,'wi473569',2,1,1,'2024-06-02 15:47:15','2024-06-02 16:26:53'],
            [3,'wi531670',3,1,1,'2024-06-02 15:47:15','2024-06-02 16:27:01'],
            [4,'wi555518',4,1,1,'2024-06-02 16:27:12','2024-06-02 16:27:12'],
            [5,'wi177936',5,1,1,'2024-06-02 16:27:18','2024-06-02 16:27:18'],
            [6,'wi129048',6,1,1,'2024-06-02 16:27:25','2024-06-02 16:27:25'],
            [7,'wi467369',7,1,1,'2024-06-02 16:27:32','2024-06-02 16:27:32'],
            [8,'wi382998',8,1,1,'2024-06-02 16:27:37','2024-06-02 16:27:37'],
            [9,'wi238713',9,1,1,'2024-06-02 16:27:42','2024-06-02 16:27:42'],
            [10,'wi450753',10,1,1,'2024-06-02 16:27:48','2024-06-02 16:27:48'],
            [11,'wi457645',11,1,1,'2024-06-02 16:27:54','2024-06-02 16:27:54'],
            [12,'wi550225',12,1,1,'2024-06-02 16:27:58','2024-06-02 16:27:58'],
            [13,'wi124409',13,1,1,'2024-06-02 16:28:04','2024-06-02 16:28:04'],
            [14,'wi195944',14,1,1,'2024-06-02 16:28:09','2024-06-02 16:28:09'],
            [15,'wi506600',15,1,1,'2024-06-02 16:28:14','2024-06-02 16:28:14'],
            [16,'wi447631',16,1,1,'2024-06-02 16:28:19','2024-06-02 16:28:19'],
            [17,'wi438242',17,1,1,'2024-06-02 16:28:23','2024-06-02 16:28:23'],
            [18,'wi553898',18,1,1,'2024-06-02 16:28:28','2024-06-02 16:28:28'],
            [19,'wi458996',19,1,1,'2024-06-02 16:28:32','2024-06-02 16:28:32'],
            [20,'wi555487',20,1,1,'2024-06-02 16:28:36','2024-06-02 16:28:36'],
            [21,'wi516888',21,1,1,'2024-06-02 16:28:40','2024-06-02 16:28:40'],
            [22,'wi197624',22,1,1,'2024-06-02 16:28:44','2024-06-02 16:28:44'],
            [23,'wi478691',23,1,1,'2024-06-02 16:28:49','2024-06-02 16:28:49'],
            [24,'wi410043',24,1,1,'2024-06-02 16:28:54','2024-06-02 16:28:54'],
            [25,'wi554743',25,1,1,'2024-06-02 16:29:01','2024-06-02 16:29:01'],
            [26,'wi475365',26,1,1,'2024-06-02 16:29:05','2024-06-02 16:29:05'],
            [27,'wi222639',27,1,1,'2024-06-02 16:29:10','2024-06-02 16:29:10'],
            [28,'wi538492',28,1,1,'2024-06-02 16:29:15','2024-06-02 16:29:15'],
            [29,'wi128352',29,1,1,'2024-06-02 16:29:20','2024-06-02 16:29:20'],
            [30,'wi439837',30,1,1,'2024-06-02 16:29:24','2024-06-02 16:29:24'],
            [31,'1-zuigelingenmelk-baby-0-6-maanden-flesvoeding-800g/06538116.html',30,2,1,'2024-06-13 15:49:34','2024-06-22 10:29:59'],
            [32,'men-dry-impact-48h-anti-transpirant-50-ml/06017939.html',1,2,1,'2024-06-13 15:52:38','2024-06-13 15:52:38'],
            [33,'sensation-white-tandpasta/06951758.html',2,2,1,'2024-06-13 15:52:51','2024-06-13 15:52:51'],
            [34,'ultra-doux-kamille-and-bloemenhoning-shampoo-250-ml/06883750.html',3,2,1,'2024-06-13 15:53:07','2024-06-13 15:53:07'],
            [35,'classic-care-shower-and-bath-675-ml/06947000.html',4,2,1,'2024-06-13 15:53:27','2024-06-13 15:53:27'],
            [36,'total-care-6-in-1-effect-tandbescherming-mondspoeling-500-ml/06980377.html',5,2,1,'2024-06-13 15:53:47','2024-06-13 15:53:47'],
            [37,'kattensnacks-temptations-met-kip-en-kaas-60-g/04340717.html',6,2,1,'2024-06-13 15:53:59','2024-06-13 15:53:59'],
            [38,'classic-hondenvoeding-kuipje-met-rund-150-g/05912570.html',7,2,1,'2024-06-13 15:54:13','2024-06-13 15:54:13'],
            [39,'bifensis-kattenvoeding-junior-brokjes-met-kip-800g/05752483.html',8,2,1,'2024-06-13 15:54:28','2024-06-13 15:54:28'],
            [40,'kattenvoeding-classics-kuipje-pate-met-kip-85-g/05553715.html',9,2,1,'2024-06-13 15:54:41','2024-06-13 15:54:41'],
            [41,'kattenvoeding-soup-original-rund-kip-en-lam-6x48g/06167615.html',10,2,1,'2024-06-13 15:54:58','2024-06-13 15:54:58'],
            [42,'oven-baked-naturel-zout-chips-150-gr/04505162.html',11,2,1,'2024-06-13 15:55:29','2024-06-13 15:55:29'],
            [43,'bake-rolls-sea-salt-smaak-150-g/06930215.html',12,2,1,'2024-06-13 15:55:44','2024-06-13 15:55:44'],
            [44,'sweet-chilli-pepper-tortilla-chips-170-gr/06786884.html',13,2,1,'2024-06-13 15:56:20','2024-06-13 15:56:20'],
            [45,'grills-chips-125-gr/05659697.html',14,2,1,'2024-06-13 15:56:42','2024-06-13 15:56:42'],
            [46,'chipito-kaas-chips-125-gr/06702097.html',15,2,1,'2024-06-13 15:56:58','2024-06-13 15:56:58'],
            [47,'haverdrink-1-l/06170456.html',16,2,1,'2024-06-13 15:57:29','2024-06-13 15:57:29'],
            [48,'vanillesmaak-4-x-125-g/06996361.html',17,2,1,'2024-06-13 15:57:40','2024-06-13 15:57:40'],
            [49,'verse-kaas-geitenkaas-smaak-150-g/06928492.html',18,2,1,'2024-06-13 15:57:53','2024-06-13 15:57:53'],
            [50,'yoghurt-op-griekse-wijze-natuur-480-g/06061869.html',19,2,1,'2024-06-13 15:58:30','2024-06-13 15:58:30'],
            [51,'mousse-met-cacao-rijk-aan-proteines-0-vet-200-g/06970404.html',20,2,1,'2024-06-13 15:58:41','2024-06-13 15:58:41'],
            [52,'tresor-milk-choco-ontbijtgranen-410-g/06787160.html',21,2,1,'2024-06-13 15:59:09','2024-06-13 15:59:09'],
            [53,'8-variety-packs-220-g/00137050.html',22,2,1,'2024-06-13 15:59:27','2024-06-13 15:59:27'],
            [54,'cruesli-chocolade-ontbijtgranen-450-gr/06455986.html',23,2,1,'2024-06-13 15:59:40','2024-06-13 15:59:40'],
            [55,'cruesli-granola-noten-and-zaden-450-gr/05942596.html',24,2,1,'2024-06-13 15:59:58','2024-06-13 15:59:58'],
            [56,'simply-crunchy-honey-baked-granola-700-g/06898751.html',25,2,1,'2024-06-13 16:00:12','2024-06-13 16:00:12'],
            [57,'baby-dry-pants-maat-6-20-luierbroekjes/07066604.html',26,2,1,'2024-06-13 16:00:31','2024-06-13 16:00:31'],
            [58,'betterfood-baby-koekjes-6-maanden-and-ouder-175-g/05949577.html',27,2,1,'2024-06-13 16:00:45','2024-06-13 16:00:45'],
            [59,'bio-apple-rice-cake-clouds-7-months-40-g/06905898.html',28,2,1,'2024-06-13 16:01:00','2024-06-13 16:01:00'],
            [60,'yogolino-melkdessert-aardbei-vanaf-6-maanden-4x100g/04338189.html',29,2,1,'2024-06-13 16:01:13','2024-06-13 16:01:13'],
            [61,'1-zuigelingenmelk-baby-0-6-maanden-flesvoeding-800g/06538116.html',30,2,1,'2024-06-13 16:01:28','2024-06-13 16:01:28'],
            [62,'Hygiene-en-verzorging/Lichaamsverzorging/Deodorant/Deostick-en-roller-mannen/Deo-Roll-Dry-impact/p/S2018020800023550000',1,3,1,'2024-06-13 16:04:18','2024-06-13 16:04:18'],
            [63,'Baby/Babymelk-en-dranken/Zuigelingenmelk/Zuigelingenmelk-Poeder-0-6M/p/S2020072800450620000',30,3,1,'2024-06-13 16:05:14','2024-06-13 16:05:14'],
            [64,'Baby/Babyvoeding/Tussendoortjes/Melkdesserts/Melkdessert-Aardbei-6M/p/S2003020600003470000',29,3,1,'2024-06-13 16:05:29','2024-06-13 16:05:29'],
            [65,'Baby/Babyvoeding/Tussendoortjes/Koekjes/Rijstwafeltjes-Appel-7M-Bio/p/S2022081000645020000',28,3,1,'2024-06-13 16:05:43','2024-06-13 16:05:43'],
            [66,'Hygiene-en-verzorging/Tand-en-mondhygiene/Tandpasta/Volwassenen/Tandpasta-Sensation-Wit-75ml/p/S2023011200672070000',2,3,1,'2024-06-13 16:06:01','2024-06-13 16:06:01'],
            [67,'Hygiene-en-verzorging/Haarverzorging/Shampoos/Voedende-en-herstellende-shampoo/Shampoo-Kamille/p/S2022082200647250000',3,3,1,'2024-06-13 16:06:12','2024-06-13 16:06:12'],
            [68,'Hygiene-en-verzorging/Lichaamsverzorging/Bad/Badschuim-Classic-care/p/S2023062800709670000',4,3,1,'2024-06-13 16:06:29','2024-06-13 16:06:29'],
            [69,'Hygiene-en-verzorging/Tand-en-mondhygiene/Mondwater-en-sprays/Mondspoeling-Total-care/p/S2023041400695630000',5,3,1,'2024-06-13 16:06:52','2024-06-13 16:06:52'],
            [70,'Huisdieren/Katten/Kattenmelk-en-snacks/Kattensnacks-Snoepjes-Kaas-Kip/p/S2009042000198850000',6,3,1,'2024-06-13 16:07:05','2024-06-13 16:07:05'],
            [71,'Huisdieren/Honden/Nat-hondenvoer/Schaaltjes-en-versheidszakjes/Hondenvoeding-Pate-Rund/p/S2017061504155850000',7,3,1,'2024-06-13 16:07:28','2024-06-13 16:07:28'],
            [72,'Huisdieren/Katten/Droog-kattenvoer/Kattenvoeding-Brokjes-Junior-Kip/p/S2018062700077390000',8,3,1,'2024-06-13 16:07:48','2024-06-13 16:07:48'],
            [73,'Huisdieren/Katten/Nat-kattenvoer/Aluminiumschaaltjes/Kattenvoeding-Terrine-Kip/p/S2017061404155700000',9,3,1,'2024-06-13 16:08:42','2024-06-13 16:08:42'],
            [74,'Huisdieren/Katten/Nat-kattenvoer/Versheidszakjes-en-soepen/Kattenvoeding-Soep-Vlees/p/S2022121400666090000',10,3,1,'2024-06-13 16:09:22','2024-06-13 16:09:22'],
            [75,'Zoute-kruidenierswaren/Chips-en-aperitief-snacks/Chips/Klassieke-chips/Chips-Naturel/p/S2010061000025970000',11,3,1,'2024-06-13 16:09:37','2024-06-13 16:09:37'],
            [76,'Zoute-kruidenierswaren/Chips-en-aperitief-snacks/Aperitiefkoekjes-en-toasts/Crackers-en-creppies/Crackers-Zout/p/S2022122800669590000',12,3,1,'2024-06-13 16:10:16','2024-06-13 16:10:16'],
            [77,'Zoute-kruidenierswaren/Chips-en-aperitief-snacks/Chips/Tortilla-s-en-dips/Tortilla-chips-Sweet-chilli-pepper/p/S2022020100602570000',13,3,1,'2024-06-13 16:10:34','2024-06-13 16:10:34'],
            [78,'Zoute-kruidenierswaren/Chips-en-aperitief-snacks/Chips/Chips-met-speciale-vorm/Gerookt-Snacks-Chips-125G/p/S2008102300026390000',14,3,1,'2024-06-13 16:10:46','2024-06-13 16:10:46'],
            [79,'Zoute-kruidenierswaren/Chips-en-aperitief-snacks/Chips/Chips-met-speciale-vorm/Chips-Chipito-Fromage/p/S2021061100030200000',15,3,1,'2024-06-13 16:11:02','2024-06-13 16:11:02'],
            [80,'Dranken-bieren-en-alcohol/Melk-en-alternatieven/Plantaardige-dranken/Granen/Haver-Zonder-Suikers/p/S2018100200120360000',16,3,1,'2024-06-13 16:11:15','2024-06-13 16:11:15'],
            [81,'Zuivel-kaas-en-plantaardige-alternatieven/Yoghurt-en-plantaardige-alternatieven/Fruit/Yoghurt-met-fruit/Yoghurt-Aroma-vanille-Probiotica/p/F2001040500131400000',17,3,1,'2024-06-13 16:11:36','2024-06-13 16:11:36'],
            [82,'Zuivel-kaas-en-plantaardige-alternatieven/Kaas/Kaas-in-sneden-en-smeerkaas/Smeerkaas/Smeerkaas-Geitenkaas-Rozemarijn/p/F2023051200120730000',18,3,1,'2024-06-13 16:11:56','2024-06-13 16:11:56'],
            [83,'Zuivel-kaas-en-plantaardige-alternatieven/Yoghurt-en-plantaardige-alternatieven/Griekse-yoghurt/Yoghurt-Natuur-Vol-Griekse-wijze/p/F2019102900046240000',19,3,1,'2024-06-13 16:12:11','2024-06-13 16:12:11'],
            [84,'Zuivel-kaas-en-plantaardige-alternatieven/Yoghurt-en-plantaardige-alternatieven/Proteine-yoghurt/Om-te-lepelen-Mousse-Chocolade-Proteine/p/F2023060500121560000',20,3,1,'2024-06-13 16:12:24','2024-06-13 16:12:24'],
            [85,'Zoete-kruidenierswaren/Ontbijt/Ontbijtgranen/Ontbijtgranen-kinderen/Ontbijtgranen-Melkchocolade/p/S2014110300046930001',21,3,1,'2024-06-13 16:12:36','2024-06-13 16:12:36'],
            [86,'Zoete-kruidenierswaren/Ontbijt/Ontbijtgranen/Ontbijtgranen-kinderen/Ontbijtgranen-8-pack-Variety-pack/p/S2016110303677280000',22,3,1,'2024-06-13 16:12:49','2024-06-13 16:12:49'],
            [87,'Zoete-kruidenierswaren/Ontbijt/Ontbijtgranen/Crunchy-Muesli/Chocolade-Ontbijtgranen-Muesli-450G/p/S2020040300416760000',23,3,1,'2024-06-13 16:13:02','2024-06-13 16:13:02'],
            [88,'Zoete-kruidenierswaren/Ontbijt/Ontbijtgranen/Granola-en-Muesli/Ontbijtgranen-Noten-and-Zaden-Havermout/p/S2017062804158040000',24,3,1,'2024-06-13 16:13:15','2024-06-13 16:13:15'],
            [89,'Zoete-kruidenierswaren/Ontbijt/Ontbijtgranen/Crunchy-Muesli/Granola-Simply/p/S2023031600690330000',25,3,1,'2024-06-13 16:13:29','2024-06-13 16:13:29'],
            [90,'Baby/Luiers/Luierbroekjes/Large/Luierbroekjes-Maat-6/p/S2023112900733070000',26,3,1,'2024-06-13 16:13:46','2024-06-13 16:13:46'],
            [91,'Zoete-kruidenierswaren/Koekjes/Kids-biscuits/Pletkoekjes-voor-papjes-6M/p/S1977092600001680000',27,3,1,'2024-06-13 16:14:14','2024-06-13 16:14:14'],
            [92,'wi223237',31,1,1,'2024-06-14 11:43:38','2024-06-14 11:43:38'],
            [93,'wi143404',32,1,1,'2024-06-22 10:29:07','2024-06-22 10:29:07'],
            [94,'pyramides-zwarte-thee-citroen-20-theezakjes/06701119.html',32,2,1,'2024-06-22 10:30:52','2024-06-22 10:30:52'],
            [95,'Zoete-kruidenierswaren/Ontbijt/Thee/Pyramides-Zwaarte-Thee-Citroen-20S/p/S2021053100548420000',32,3,1,'2024-06-22 10:31:15','2024-06-22 10:31:15'],
            [96,'wi33910',33,1,1,'2024-06-22 10:34:26','2024-06-22 10:34:26'],
            [97,'oploskoffie-extra-dessert-200g/00143242.html',33,2,1,'2024-06-22 10:34:43','2024-06-22 10:34:43'],
            [98,'Dranken-bieren-en-alcohol/Warme-dranken/Koffie/Instant/Koffie-Extra-Dessert-Oplos/p/S2015102300399740000',33,3,1,'2024-06-22 10:35:02','2024-06-22 10:35:02'],
            [99,'wi191016',34,1,1,'2024-06-22 10:37:23','2024-06-22 10:37:23'],
            [100,'of-london-lady-grey-25-builtjes-50-g/01439551.html',34,2,1,'2024-06-22 10:37:43','2024-06-22 10:37:43'],
            [101,'Dranken-bieren-en-alcohol/Warme-dranken/Thee/Thee-Lady-grey-Zakjes/p/S1998030300034230000',34,3,1,'2024-06-22 10:38:13','2024-06-22 10:38:13'],
            [102,'wi193225',35,1,1,'2024-06-22 10:49:06','2024-06-22 10:49:06'],
            [103,'cafe-au-lait-16-capsules/05197055.html',35,2,1,'2024-06-22 10:49:23','2024-06-22 10:49:23'],
            [104,'Zoete-kruidenierswaren/Ontbijt/Koffie/Nescafe-Dolce-Gusto-caps-en-compatibele/Koffie-Cafe-au-lait-Capsules/p/S2015081700038220099',35,3,1,'2024-06-22 10:49:40','2024-06-22 10:49:40'],
            [107,'wi223250',37,1,1,'2024-06-22 11:08:28','2024-06-22 11:08:28'],
            [108,'wafels-400-g/04356426.html',37,2,1,'2024-06-22 11:08:42','2024-06-22 11:08:42'],
            [109,'Zoete-kruidenierswaren/Dessertbereidingen/Dessertmix/Mix-voor-wafels/p/S2005070500096070000',37,3,1,'2024-06-22 11:08:58','2024-06-22 11:08:58'],
            [110,'wi407913',38,1,1,'2024-06-22 11:11:41','2024-06-22 11:11:41'],
            [111,'roomrijstpap-original-400-g/05552739.html',38,2,1,'2024-06-22 11:11:54','2024-06-22 11:11:54'],
            [112,'Zoete-kruidenierswaren/Dessertbereidingen/Dessertmix/Rijstpudding-Original/p/S2021020500505520000',38,3,1,'2024-06-22 11:12:06','2024-06-22 11:12:06'],
            [113,'wi223312',39,1,1,'2024-06-22 11:14:15','2024-06-22 11:14:15'],
            [114,'pudding-powder-vanille-smaak-7-x-50-g/05257589.html',39,2,1,'2024-06-22 11:14:29','2024-06-22 11:14:29'],
            [115,'Zoete-kruidenierswaren/Dessertbereidingen/Dessertmix/Pudding-Poeder-Vanille/p/S2012082100097290000',39,3,1,'2024-06-22 11:14:51','2024-06-22 11:14:51'],
            [120,'mayo-light--80-450-ml/04939713.html',31,2,1,'2024-06-22 11:30:28','2024-06-22 11:30:28'],
            [121,'Zoute-kruidenierswaren/Sauzen/Andere/Dressing-Light-10-vet-Squeeze/p/S2010031100010510000',31,3,1,'2024-06-22 11:30:52','2024-06-22 11:31:00'],
            [122,'wi223203',42,1,1,'2024-06-22 11:32:20','2024-06-22 11:32:20'],
            [123,'chinese-curry-360-g/01414630.html',42,2,1,'2024-06-22 11:32:36','2024-06-22 11:32:36'],
            [124,'Zoute-kruidenierswaren/Sauzen/Pastasauzen/Saus-Chinese-curry/p/S2002031300014190000',42,3,1,'2024-06-22 11:32:52','2024-06-22 11:32:52'],
            [125,'wi548800',43,1,1,'2024-06-22 11:35:04','2024-06-22 11:35:04'],
            [126,'sauces-andalouse-255-g/06792473.html',43,2,1,'2024-06-22 11:35:23','2024-06-22 11:35:23'],
            [127,'Zoute-kruidenierswaren/Sauzen/Andere/Sauce-Andalouse/p/S2021122300277900000',43,3,1,'2024-06-22 11:35:40','2024-06-22 11:35:40'],
            [128,'wi409698',44,1,1,'2024-06-22 11:37:15','2024-06-22 11:37:15'],
            [129,'tomaten-ketchup-50-minder-suikers-en-zout-220-ml/05873226.html',44,2,1,'2024-06-22 11:37:29','2024-06-22 11:37:29'],
            [130,'Zoute-kruidenierswaren/Sauzen/Ketchup/Ketchup-Tomaat-50-suiker-en-zout/p/S2019080800289640000',44,3,1,'2024-06-22 11:37:42','2024-06-22 11:37:42'],
            [131,'wi226097',45,1,1,'2024-06-22 11:39:30','2024-06-22 11:39:30'],
            [132,'zoetzuur-extra-ananas-450-g/05477185.html',45,2,1,'2024-06-22 11:39:42','2024-06-22 11:39:42'],
            [133,'Zoute-kruidenierswaren/Sauzen/Pastasauzen/Saus-Zoetzuur-Extra-ananas/p/S2014051500014700000',45,3,1,'2024-06-22 11:40:16','2024-06-22 11:40:16'],
            [134,'wi466856',46,1,1,'2024-06-22 11:42:23','2024-06-22 11:42:23'],
            [135,'pasta-capellini-375g/06239295.html',46,2,1,'2024-06-22 11:42:37','2024-06-22 11:42:37'],
            [136,'Zoute-kruidenierswaren/Pasta-rijst-en-andere-zetmeelproducten/Pasta/Witte-pasta/Pasta-Spaghetti-Fijn-Al-Dente/p/S2019080700288690000',46,3,1,'2024-06-22 11:42:52','2024-06-22 11:42:52'],
            [137,'wi197037',47,1,1,'2024-06-22 11:44:53','2024-06-22 11:44:53'],
            [138,'spaghetti-n°12-500-g/00730518.html',47,2,1,'2024-06-22 11:45:08','2024-06-22 11:45:08'],
            [139,'Zoute-kruidenierswaren/Pasta-rijst-en-andere-zetmeelproducten/Pasta/Witte-pasta/Pasta-Spaghetti-n-12/p/S1998052600137070000',47,3,1,'2024-06-22 11:45:22','2024-06-22 11:45:22'],
            [140,'wi477354',48,1,1,'2024-06-22 11:47:12','2024-06-22 11:47:12'],
            [141,'spaghetto-quadrato-n°-1-500-g/05647754.html',48,2,1,'2024-06-22 11:47:32','2024-06-22 11:47:32'],
            [142,'Zoute-kruidenierswaren/Pasta-rijst-en-andere-zetmeelproducten/Pasta/Witte-pasta/Pasta-Spaghetti-N15/p/S2022030200610940000',48,3,1,'2024-06-22 11:47:45','2024-06-22 11:47:45'],
            [147,'wi197041',51,1,1,'2024-06-22 11:55:07','2024-06-22 11:55:07'],
            [148,'fusilli-n°34-500-g/00730525.html',51,2,1,'2024-06-22 11:55:37','2024-06-22 11:55:37'],
            [149,'Zoute-kruidenierswaren/Pasta-rijst-en-andere-zetmeelproducten/Pasta/Witte-pasta/Pasta-Fusilli/p/S2018070200079190000',51,3,1,'2024-06-22 11:55:49','2024-06-22 11:55:49'],
            [156,'wi575455',55,1,1,'2024-06-22 12:02:45','2024-06-22 12:02:45'],
            [157,'risotto-and-paella-rice-mediterraneo-500-g/01466051.html',55,2,1,'2024-06-22 12:03:01','2024-06-22 12:03:01'],
            [158,'Zoute-kruidenierswaren/Pasta-rijst-en-andere-zetmeelproducten/Rijst/Rondkorrelige-rijst/Rijst-Mediterane-Risotto-Paella-10m/p/S2020022600364440000',55,3,1,'2024-06-22 12:03:13','2024-06-22 12:03:13'],
            [162,'wi368623',58,1,1,'2024-06-22 12:18:44','2024-06-22 12:18:44'],
            [163,'advanced-white-milde-smaak-mondspoeling-500-ml/06980411.html',58,2,1,'2024-06-22 12:18:57','2024-06-22 12:18:57'],
            [164,'Hygiene-en-verzorging/Tand-en-mondhygiene/Mondwater-en-sprays/Advanced-White-Milde-Smaak/p/S2023041700695930000',58,3,1,'2024-06-22 12:19:07','2024-06-23 18:01:58'],
            [165,'wi115590',59,1,1,'2024-06-22 12:20:08','2024-06-22 12:20:08'],
            [166,'bodyspray-deodorant-dark-temptation-150-ml/06614706.html',59,2,1,'2024-06-22 12:20:20','2024-06-22 12:20:20'],
            [167,'Hygiene-en-verzorging/Lichaamsverzorging/Deodorant/Deospray-mannen/Bodyspray-Dark-Temptation-150ml/p/S2021011900496660000',59,3,1,'2024-06-22 12:20:36','2024-06-22 12:20:36'],
            [168,'wi485118',60,1,1,'2024-06-22 12:27:37','2024-06-22 12:27:37'],
            [169,'repair-shampoo-440ml/06508830.html',60,2,1,'2024-06-22 12:27:58','2024-06-22 12:27:58'],
            [170,'Hygiene-en-verzorging/Haarverzorging/Shampoos/Voedende-en-herstellende-shampoo/Syoss-Repair-Shampoo-440ml/p/S2020081100455620000',60,3,1,'2024-06-22 12:28:09','2024-06-22 12:28:09'],
            [171,'wi106967',61,1,1,'2024-06-22 12:30:49','2024-06-22 12:30:49'],
            [172,'gold-kattenvoeding-mousse-kip-85g/05729059.html',61,2,1,'2024-06-22 12:31:00','2024-06-22 12:31:00'],
            [173,'Huisdieren/Katten/Nat-kattenvoer/Blikken-en-koepels/Kattenvoeding-Mousse-Kip/p/S2021021100508650000',61,3,1,'2024-06-22 12:31:14','2024-06-22 12:31:14'],
            [174,'wi184725',62,1,1,'2024-06-22 12:32:30','2024-06-22 12:32:30'],
            [175,'kattensnacks-met-kip-60-g/05069386.html',62,2,1,'2024-06-22 12:32:42','2024-06-22 12:32:42'],
            [176,'Huisdieren/Katten/Kattenmelk-en-snacks/Kattensnacks-Snoepjes-Kip/p/S2012021302191910000',62,3,1,'2024-06-22 12:32:55','2024-06-22 12:32:55'],
            [177,'wi382954',63,1,1,'2024-06-22 12:41:05','2024-06-22 12:41:05'],
            [178,'bifensis-kattenvoeding-adult-sterilcat-brokjes-met-rund-800g/05752436.html',63,2,1,'2024-06-22 12:41:16','2024-06-22 12:41:16'],
            [179,'Huisdieren/Katten/Droog-kattenvoer/Kattenvoeding-Brokjes-Gesteriliseerd/p/S2009040102191690000',63,3,1,'2024-06-22 12:41:30','2024-06-22 12:41:30'],
            [180,'wi407145',64,1,1,'2024-06-22 12:44:40','2024-06-22 12:44:40'],
            [181,'droge-voeding-perfect-fit-senior-7-kattenvoeding-kip-750-g/05829713.html',64,2,1,'2024-06-22 12:44:54','2024-06-22 12:44:54'],
            [182,'Huisdieren/Katten/Droog-kattenvoer/Kattenvoeding-Brokjes-Senior-Kip/p/S2019052400256970000',64,3,1,'2024-06-22 12:45:05','2024-06-22 12:45:05'],
            [183,'wi195562',65,1,1,'2024-06-22 12:57:03','2024-06-22 12:57:03'],
            [184,'complet-droge-voeding-met-gevogelte-groenten-en-granen-1kg/05829952.html',65,2,1,'2024-06-22 12:57:14','2024-06-22 12:57:14'],
            [185,'Huisdieren/Honden/Droog-hondenvoer/Kleine-honden/Hondenvoeding-Brokjes-Small-Gevogelte/p/S2012020600193070000',65,3,1,'2024-06-22 12:57:28','2024-06-22 12:57:28'],
            [186,'wi229807',66,1,1,'2024-06-22 12:58:41','2024-06-22 12:58:41'],
            [187,'bugles-nacho-cheese-kaas-chips-125-gr/05659740.html',66,2,1,'2024-06-22 12:58:52','2024-06-22 12:58:52'],
            [188,'Zoute-kruidenierswaren/Chips-en-aperitief-snacks/Chips/Chips-met-speciale-vorm/Chips-Nacho-Cheese/p/S2022030700611950000',66,3,1,'2024-06-22 12:59:04','2024-06-22 12:59:04'],
            [189,'wi516969',67,1,1,'2024-06-22 13:00:39','2024-06-22 13:00:39'],
            [190,'max-salt-and-black-pepper-chips-185-gr/06793480.html',67,2,1,'2024-06-22 13:00:49','2024-06-22 13:00:49'],
            [191,'Zoute-kruidenierswaren/Chips-en-aperitief-snacks/Chips/Klassieke-chips/Chips-Zout-en-Zwart-Peper-Smaak/p/S2022012500600660000',67,3,1,'2024-06-22 13:01:00','2024-06-22 13:01:00'],
            [194,'wi526383',69,1,1,'2024-06-22 13:04:28','2024-06-22 13:04:28'],
            [195,'pickles-chips-200-gr/06867560.html',69,2,1,'2024-06-22 13:04:38','2024-06-22 13:04:38'],
            [196,'Zoute-kruidenierswaren/Chips-en-aperitief-snacks/Chips/Klassieke-chips/Chips-Pickles/p/S2022072800600560098',69,3,1,'2024-06-22 13:04:50','2024-06-22 13:04:50'],
            [197,'wi233276',70,1,1,'2024-06-22 13:07:10','2024-06-22 13:07:10'],
            [198,'original-hartige-snack-165-g/07090377.html',70,2,1,'2024-06-22 13:07:39','2024-06-22 13:07:39'],
            [199,'Apero-en-voorgerechten/Chips-en-popcorn/Naturel-chips/Chips-Original/p/S2024031300758120000',70,3,1,'2024-06-22 13:08:20','2024-06-22 13:08:20'],
            [200,'wi233277',71,1,1,'2024-06-22 13:08:56','2024-06-22 13:08:56'],
            [201,'klassieke-paprika-165-g/07092173.html',71,2,1,'2024-06-22 13:09:22','2024-06-22 13:09:22'],
            [202,'wi233278',72,1,1,'2024-06-22 13:10:30','2024-06-22 13:10:30'],
            [203,'sour-cream-and-onion-hartige-snack-165-g/07090314.html',72,2,1,'2024-06-22 13:10:46','2024-06-22 13:10:46'],
            [204,'Apero-en-voorgerechten/Chips-en-popcorn/Chips-met-andere-smaken/Chips-Cream-and-onion/p/S2024031300758080000',72,3,1,'2024-06-22 13:11:05','2024-06-22 13:11:05'],
            [206,'wi233279',74,1,1,'2024-06-22 13:12:29','2024-06-22 13:12:29'],
            [207,'pittig-gekruid-hartige-snack-165-g/07090376.html',74,2,1,'2024-06-22 13:12:42','2024-06-22 13:12:42'],
            [208,'Apero-en-voorgerechten/Chips-en-popcorn/Chips-met-andere-smaken/Chips-Hot-and-spicy/p/S2024031300758110000',74,3,1,'2024-06-22 13:12:55','2024-06-22 13:12:55'],
            [213,'wi237280',77,1,1,'2024-06-22 13:16:19','2024-06-22 13:16:19'],
            [214,'kers-500-g/05385363.html',77,2,1,'2024-06-22 13:16:30','2024-06-22 13:16:30'],
            [215,'Bewuste-voeding/Zero-lactose/Yoghurt-en-Dessert/Kers-Alternative-Plantaardig-Yoghurt/p/F2020122300073970000',77,3,1,'2024-06-22 13:16:51','2024-06-22 13:16:51'],
            [216,'wi548470',78,1,1,'2024-06-22 13:18:44','2024-06-22 13:18:44'],
            [217,'not-mlk-plantaardige-drink-vol-3.5-1-l/06691457.html',78,2,1,'2024-06-22 13:18:58','2024-06-22 13:18:58'],
            [218,'Dranken-bieren-en-alcohol/Melk-en-alternatieven/Plantaardige-dranken/Granen/Haver-This-is-Not-M-LK-Vol/p/S2021041900537060000',78,3,1,'2024-06-22 13:19:13','2024-06-22 13:19:13'],
            [219,'wi162764',79,1,1,'2024-06-22 13:21:20','2024-06-22 13:21:20'],
            [220,'verse-kaas-knoflook-and-fijne-kruiden-185-g/06152603.html',79,2,1,'2024-06-22 13:21:32','2024-06-22 13:21:32'],
            [221,'Zuivel-kaas-en-plantaardige-alternatieven/Kaas/Kaas-in-sneden-en-smeerkaas/Smeerkaas/Smeerkaas-Kruidenkaas-Fijne-Kruiden/p/F2019010200028640000',79,3,1,'2024-06-22 13:21:44','2024-06-22 13:21:44'],
            [222,'wi575406',80,1,1,'2024-06-22 13:23:08','2024-06-22 13:23:08'],
            [223,'oikos-yoghurt-op-griekse-wijze-natuur-0-vet-480-g/06585467.html',80,2,1,'2024-06-22 13:23:18','2024-06-22 13:23:18'],
            [224,'Zuivel-kaas-en-plantaardige-alternatieven/Yoghurt-en-plantaardige-alternatieven/Griekse-yoghurt/Yoghurt-Natuur-0-Griekse-wijze/p/F2020111800071920000',80,3,1,'2024-06-22 13:23:36','2024-06-22 13:23:36'],
            [225,'wi489128',81,1,1,'2024-06-22 13:24:33','2024-06-22 13:24:33'],
            [226,'haver-barista-edition-500-ml/07039084.html',81,2,1,'2024-06-22 13:24:45','2024-06-22 13:24:45'],
            [227,'Dranken-bieren-en-alcohol/Melk-en-alternatieven/Plantaardige-dranken/Granen/Haverdrink-Barista-Edition/p/S2023060100704830000',81,3,1,'2024-06-22 13:25:04','2024-06-22 13:25:04'],
            [232,'wi560780',84,1,1,'2024-06-22 13:33:08','2024-06-22 13:33:08'],
            [233,'rice-krispies-ontbijtgranen-360-g/06991814.html',84,2,1,'2024-06-22 13:33:20','2024-06-22 13:33:20'],
            [234,'Zoete-kruidenierswaren/Ontbijt/Ontbijtgranen/Ontbijtgranen-kinderen/Ontbijtgranen-Gepofte-rijst/p/S2023052600704140000',84,3,1,'2024-06-22 13:33:33','2024-06-22 13:33:33'],
            [235,'wi560771',85,1,1,'2024-06-22 13:35:24','2024-06-22 13:35:24'],
            [236,'extra-crunchy-muesli-pure-chocolade-noten-ontbijtgranen-375g/06966637.html',85,2,1,'2024-06-22 13:35:43','2024-06-22 13:35:43'],
            [237,'Zoete-kruidenierswaren/Ontbijt/Ontbijtgranen/Crunchy-Muesli/Ontbijtgranen-Pure-chocolade/p/S2023021700682710000',85,3,1,'2024-06-22 13:35:58','2024-06-22 13:35:58'],
            [240,'wi420281',87,1,1,'2024-06-22 13:40:34','2024-06-22 13:40:34'],
            [241,'cocktail-met-scotch-whisky-300-ml/00129103.html',87,2,1,'2024-06-22 13:40:48','2024-06-22 13:40:48'],
            [242,'Zoute-kruidenierswaren/Sauzen/Andere/Saus-Cocktail/p/S1997040700013120000',87,3,1,'2024-06-22 13:41:08','2024-06-22 13:41:08'],
            [243,'wi420269',88,1,1,'2024-06-22 13:42:42','2024-06-22 13:42:42'],
            [244,'bearnaise-300-ml/00129545.html',88,2,1,'2024-06-22 13:42:53','2024-06-22 13:42:53'],
            [245,'Zoute-kruidenierswaren/Sauzen/Andere/Saus-Bearnaise/p/S1997040700013110000',88,3,1,'2024-06-22 13:43:05','2024-06-22 13:43:05'],
            [246,'wi130817',89,1,1,'2024-06-22 13:45:17','2024-06-22 13:45:17'],
            [247,'tomaten-ketchup-bio-500-ml/05849770.html',89,2,1,'2024-06-22 13:45:29','2024-06-22 13:45:29'],
            [248,'Zoute-kruidenierswaren/Sauzen/Ketchup/Ketchup-Tomaten-Bio/p/S2017030803694840000',89,3,1,'2024-06-22 13:45:45','2024-06-22 13:45:45'],
            [249,'wi223255',90,1,1,'2024-06-22 13:47:05','2024-06-22 13:47:05'],
            [250,'fijne-kruiden-yogorette-vinaigrette-450-ml/05061019.html',90,2,1,'2024-06-22 13:47:19','2024-06-22 13:47:19'],
            [251,'Zoute-kruidenierswaren/Sauzen/Vinaigrette/Vinaigrette-Fijne-kruiden-Light/p/S2011021000015720000',90,3,1,'2024-06-22 13:47:30','2024-06-22 13:47:30'],
            [252,'wi455005',91,1,1,'2024-06-22 13:50:33','2024-06-22 13:50:33'],
            [253,'curry-ketchup-425-ml/01737655.html',91,2,1,'2024-06-22 13:50:46','2024-06-22 13:50:46'],
            [254,'Zoute-kruidenierswaren/Sauzen/Ketchup/Ketchup-Curry/p/S2003021200014300000',91,3,1,'2024-06-22 13:50:56','2024-06-22 13:50:56'],
            [255,'wi164582',92,1,1,'2024-06-22 14:59:14','2024-06-22 14:59:14'],
            [256,'pyramide-groene-three-munt-20-zakjes/06703149.html',92,2,1,'2024-06-22 14:59:27','2024-06-22 14:59:27'],
            [257,'Zoete-kruidenierswaren/Ontbijt/Thee/Groene-Thee-Intense-Munt-20Z/p/S2021052800547770000',92,3,1,'2024-06-22 14:59:39','2024-06-22 14:59:39'],
            [258,'wi550306',93,1,1,'2024-06-22 15:01:02','2024-06-22 15:01:02'],
            [259,'black-tea-tropical-fruits-36-g/06703182.html',93,2,1,'2024-06-22 15:01:12','2024-06-22 15:01:12'],
            [260,'Zoete-kruidenierswaren/Ontbijt/Thee/Pyramides-Zwaarte-Thee-Tropical-Fruit-20Z/p/S2021060200549240000',93,3,1,'2024-06-22 15:01:42','2024-06-22 15:01:59'],
            [261,'wi456069',94,1,1,'2024-06-22 15:03:21','2024-06-22 15:03:21'],
            [262,'by-nespresso-koffie-house-blend-10capsules-12x57g/06254741.html',94,2,1,'2024-06-22 15:03:40','2024-06-22 15:03:40'],
            [263,'Zoete-kruidenierswaren/Ontbijt/Koffie/Nespresso-compatibel-caps/Koffie-Houseblend-10-caps/p/S2019070100269220000',94,3,1,'2024-06-22 15:03:54','2024-06-22 15:03:54'],
            [264,'wi502475',95,1,1,'2024-06-22 15:05:14','2024-06-22 15:05:14'],
            [265,'by-nescafe-dolce-gusto-koffie-vanilla-macchiato-12cap-3x132g/06671652.html',95,2,1,'2024-06-22 15:05:31','2024-06-22 15:05:31'],
            [266,'Zoete-kruidenierswaren/Ontbijt/Koffie/Nescafe-Dolce-Gusto-caps-en-compatibele/Koffie-Vanilla-macchiato-12-caps/p/S2021030300522690000',95,3,1,'2024-06-22 15:05:45','2024-06-22 15:05:45'],
            [267,'wi574242',96,1,1,'2024-06-22 15:07:36','2024-06-22 15:07:36'],
            [268,'biologisch-gembersinaasappel-met-vanille-17tz/06992639.html',96,2,1,'2024-06-22 15:07:51','2024-06-22 15:07:51'],
            [269,'Zoete-kruidenierswaren/Ontbijt/Thee/Thee-Gember-Sinaas-17Z-Bio/p/S2023070500711860000',96,3,1,'2024-06-22 15:08:18','2024-06-22 15:08:18'],
            [270,'wi223309',97,1,1,'2024-06-22 15:13:42','2024-06-22 15:13:42'],
            [271,'patisserie-bloem-1-kg/00694935.html',97,2,1,'2024-06-22 15:13:53','2024-06-22 15:13:53'],
            [272,'Zoete-kruidenierswaren/Dessertbereidingen/Bloem/Bloem-Fijngebak/p/S1985020600095970000',97,3,1,'2024-06-22 15:14:04','2024-06-22 15:14:04'],
            [273,'Apero-en-voorgerechten/Chips-en-popcorn/Paprika-chips/Chips-Sweet-paprika/p/S2024031300758070000',71,3,1,'2024-06-22 18:00:11','2024-06-22 18:00:11'],
            [274,'wi384970',102,1,1,'2024-06-23 17:16:44','2024-06-23 17:16:44'],
            [275,'perfection-tandpasta-75ml/07007577.html',102,2,1,'2024-06-23 17:16:57','2024-06-23 17:16:57'],
            [276,'Hygiene-en-verzorging/Tand-en-mondhygiene/Tandpasta/Volwassenen/Tandpasta-3D-White-Perfection/p/S2023070400710910000',102,3,1,'2024-06-23 17:17:09','2024-06-23 17:17:09'],
            [277,'wi564846',103,1,1,'2024-06-23 17:21:36','2024-06-23 17:21:36'],
            [278,'tandvlees-and-glazuur-pro-repair-tandpasta-75ml/07014036.html',103,2,1,'2024-06-23 17:21:47','2024-06-23 17:21:47'],
            [279,'Hygiene-en-verzorging/Tand-en-mondhygiene/Tandpasta/Volwassenen/Tandpasta-Tandvlees-Glazuur-Original/p/S2023070400710920000',103,3,1,'2024-06-23 17:22:01','2024-06-23 17:22:01'],
            [280,'wi538556',104,1,1,'2024-06-23 17:24:41','2024-06-23 17:24:41'],
            [281,'cruesli-zero-sugar-added-cacao-and-banaan-400-gr/07052678.html',104,2,1,'2024-06-23 17:24:54','2024-06-23 17:24:54'],
            [282,'Zoete-kruidenierswaren/Ontbijt/Ontbijtgranen/Crunchy-Muesli/Ontbijtgranen-Muesli-Cacao-Banaan/p/S2022071200638980000',104,3,1,'2024-06-23 17:25:07','2024-06-23 17:25:07'],
            [283,'wi478688',105,1,1,'2024-06-23 17:26:35','2024-06-24 09:48:18'],
            [284,'cruesli-4-noten-ontbijtgranen-450-gr/06455987.html',105,2,1,'2024-06-23 17:26:46','2024-06-23 17:26:46'],
            [285,'Zoete-kruidenierswaren/Ontbijt/Ontbijtgranen/Crunchy-Muesli/4-Nuts-Ontbijtgranen-Muesli-450G/p/S2020040300416780000',105,3,1,'2024-06-23 17:26:58','2024-06-23 17:26:58'],
            [286,'wi367996',106,1,1,'2024-06-23 17:28:35','2024-06-23 17:28:35'],
            [287,'cruesli-original-granola-450-gr/05942598.html',106,2,1,'2024-06-23 17:28:47','2024-06-23 17:28:47'],
            [288,'Zoete-kruidenierswaren/Ontbijt/Ontbijtgranen/Granola-en-Muesli/Ontbijtgranen-Naturel-Havermout/p/S2016070603658140000',106,3,1,'2024-06-23 17:29:00','2024-06-23 17:29:00'],
            [289,'wi162826',107,1,1,'2024-06-23 17:33:12','2024-06-23 17:33:12'],
            [290,'corn-flakes-ontbijtgranen-375-g/06778129.html',107,2,1,'2024-06-23 17:33:26','2024-06-23 17:33:26'],
            [291,'Zoete-kruidenierswaren/Ontbijt/Ontbijtgranen/Klassieke-ontbijtgranen/Corn-Flakes-Org/p/S2022022500609840000',107,3,1,'2024-06-23 17:33:41','2024-06-23 17:33:41'],
            [292,'wi143405',108,1,1,'2024-06-23 17:41:07','2024-06-23 17:41:07'],
            [293,'pyramide--zwarte-thee-bosvruchten-20-zakjes/06701120.html',108,2,1,'2024-06-23 17:41:17','2024-06-23 17:41:17'],
            [294,'Zoete-kruidenierswaren/Ontbijt/Thee/Pyramides-Zwaarte-Thee-Bosvruchten-20Z/p/S2021052800547680000',108,3,1,'2024-06-23 17:41:27','2024-06-23 17:41:27'],
            [295,'wi197040',109,1,1,'2024-06-23 17:48:20','2024-06-23 17:48:20'],
            [296,'penne-rigate-n°41-500-g/01034492.html',109,2,1,'2024-06-23 17:48:32','2024-06-23 17:48:32'],
            [297,'Zoute-kruidenierswaren/Pasta-rijst-en-andere-zetmeelproducten/Pasta/Witte-pasta/Pasta-Penne-rigate-n-41/p/S2018070200079220000',109,3,1,'2024-06-23 17:48:52','2024-06-23 17:48:52'],
            [298,'wi197039',110,1,1,'2024-06-23 17:49:29','2024-06-23 17:49:29'],
            [299,'linguine-n°7-500-g/00825016.html',110,2,1,'2024-06-23 17:49:42','2024-06-23 17:49:42'],
            [300,'Zoute-kruidenierswaren/Pasta-rijst-en-andere-zetmeelproducten/Pasta/Witte-pasta/Pasta-Linguine-n-7/p/S2012040400137160000',110,3,1,'2024-06-23 17:49:55','2024-06-23 17:49:55'],
            [301,'wi210484',111,1,1,'2024-06-23 17:55:01','2024-06-23 17:55:01'],
            [302,'farfalle-n°93-500g/06714982.html',111,2,1,'2024-06-23 17:55:13','2024-06-23 17:55:13'],
            [303,'Zoute-kruidenierswaren/Pasta-rijst-en-andere-zetmeelproducten/Pasta/Witte-pasta/Pasta-Farfalle-n-93/p/S2018070200079720000',111,3,1,'2024-06-23 17:55:28','2024-06-23 17:55:28'],
            [304,'wi450222',112,1,1,'2024-06-23 17:56:04','2024-06-23 17:56:04'],
            [305,'orecchiette-500-gr/05896832.html',112,2,1,'2024-06-23 17:56:16','2024-06-23 17:56:16'],
            [306,'Zoute-kruidenierswaren/Pasta-rijst-en-andere-zetmeelproducten/Pasta/Witte-pasta/Pasta-Orecchiette-n-91/p/S2018070200079330000',112,3,1,'2024-06-23 17:56:29','2024-06-23 17:56:29'],
     
        ];

        foreach ($scrapingProducts as $scrapingProduct) {
            ScrapingProduct::create([
                'slug' => $scrapingProduct[1],
                'id_product' => $scrapingProduct[2],
                'id_store' => $scrapingProduct[3],
                'status' => $scrapingProduct[4],
                'created_at' => $scrapingProduct[5],
                'updated_at' => $scrapingProduct[6]
            ]);
        }
    }
}

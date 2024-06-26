<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Models\Price;
use App\Models\Product;
use App\Models\Store;
use Carbon\Carbon;

class PriceController extends Controller
{
     public function indexApi()
    {
        $prices = Price::with(['product', 'store'])
            ->where('status', 1)
            ->get();

        if ($prices->isEmpty()) {
            return response()->json(['message' => 'There are no prices for today.'], 404);
        }

        return response()->json($prices);
    }

    public function getPricesByStore(Request $request, $storeName)
    {
        $validStores = [
            'albert-heijn' => 'Albert Heijn',
            'carrefour' => 'Carrefour',
            'delhaize' => 'Delhaize',
        ];

        $storeNameFormatted = strtolower(str_replace(' ', '', $storeName));

        if (!array_key_exists($storeNameFormatted, $validStores)) {
            return response()->json(['message' => 'Invalid store name.'], 404);
        }

        $store = Store::where('name', $validStores[$storeNameFormatted])->first();

        if (!$store) {
            return response()->json(['message' => 'Store not found.'], 404);
        }

        $today = Carbon::today();
        $prices = Price::with(['product', 'store'])
            ->where('id_store', $store->id)
            ->whereDate('created_at', $today)
            ->where('status', 1)
            ->get();

        if ($prices->isEmpty()) {
            return response()->json(['message' => 'There are no prices for today for this store.'], 404);
        }

        return response()->json($prices);
    }
}

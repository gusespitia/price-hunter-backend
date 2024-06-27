<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Models\Price;
use App\Models\Product;
use App\Models\Store;
use Carbon\Carbon;

class PriceController extends Controller
{
    /**
     * Get list of prices.
     *
     * @group Prices
     *
     * @response 200 {
     *     "id": 1,
     *     "data": "2021-09-15",
     *     "price": 9.99,
     *     "presentation": "500g",
     *     "id_product": 1,
     *     "id_store": 1,
     *     "created_at": "2021-09-15T14:59:48.000000Z",
     *     "updated_at": "2021-09-15T14:59:48.000000Z",
     *     "product": {
     *         "id": 1,
     *         "name": "Product Name",
     *         "category_id": 1,
     *         "created_at": "2021-09-15T14:59:48.000000Z",
     *         "updated_at": "2021-09-15T14:59:48.000000Z"
     *     },
     *     "store": {
     *         "id": 1,
     *         "name": "Store Name",
     *         "url_base": "https://store.com",
     *         "logo": "https://store.com/logo.png",
     *         "status": true,
     *         "created_at": "2021-09-15T14:59:48.000000Z",
     *         "updated_at": "2021-09-15T14:59:48.000000Z"
     *     }
     * }
     * @response 404 {
     *     "message": "There are no prices for today."
     * }
     */
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

    /**
     * Get prices by store name.
     *
     * @group Prices
     *
     * @urlParam storeName string required The name of the store. Example: Carrefour
     *
     * @response 200 {
     *     "id": 1,
     *     "data": "2021-09-15",
     *     "price": 9.99,
     *     "presentation": "500g",
     *     "id_product": 1,
     *     "id_store": 1,
     *     "created_at": "2021-09-15T14:59:48.000000Z",
     *     "updated_at": "2021-09-15T14:59:48.000000Z",
     *     "product": {
     *         "id": 1,
     *         "name": "Product Name",
     *         "category_id": 1,
     *         "created_at": "2021-09-15T14:59:48.000000Z",
     *         "updated_at": "2021-09-15T14:59:48.000000Z"
     *     },
     *     "store": {
     *         "id": 1,
     *         "name": "Store Name",
     *         "url_base": "https://store.com",
     *         "logo": "https://store.com/logo.png",
     *         "status": true,
     *         "created_at": "2021-09-15T14:59:48.000000Z",
     *         "updated_at": "2021-09-15T14:59:48.000000Z"
     *     }
     * }
     * @response 404 {
     *     "message": "Store not found or no prices found."
     * }
     */
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

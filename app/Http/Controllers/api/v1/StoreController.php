<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Get list of stores.
     *
     * @group Stores
     *
     * @response 200 {
     *     "id": 1,
     *     "name": "Store Name",
     *     "url_base": "https://store.com",
     *     "logo": "https://store.com/logo.png",
     *     "status": true,
     *     "created_at": "2021-09-15T14:59:48.000000Z",
     *     "updated_at": "2021-09-15T14:59:48.000000Z"
     * }
     */
    public function indexApi()
    {
        $stores = Store::all();
        return response()->json($stores);
    }
}

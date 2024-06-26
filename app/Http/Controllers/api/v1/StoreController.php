<?php
namespace App\Http\Controllers\api\v1;

use App\Models\Store;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StoreController extends Controller
{
       public function indexApi()
    {
        $stores = Store::all();
        return response()->json($stores);
    }
}


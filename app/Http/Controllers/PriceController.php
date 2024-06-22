<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;
use App\Models\Product;
use App\Models\Store;
use Carbon\Carbon;

class PriceController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->input('sort', 'asc');
        $query = Price::with(['product', 'store']);

        $productName = $request->input('product_name');
        $storeId = $request->input('store');
        $datum = $request->input('datum');
        $id = $request->input('id');

        if ($productName) {
            $productName = strtolower(trim($productName)); 
            $query->whereHas('product', function ($query) use ($productName) {
                $query->where('name', 'like', '%' . $productName . '%');
            });
        }        
        
        if ($storeId) {
            $query->where('id_store', $storeId);
        }
        
        if ($datum) {
            $query->whereDate('created_at', Carbon::parse($datum)->format('Y-m-d'));
        }
        
        if ($id) {
            $query->where('id', $id);
        }
   
        $prices = $query->orderBy('id', $sort)->paginate(20);      
        $products = Product::all();
        $stores = Store::all();
        
        return view('price.index', compact('prices', 'products', 'stores', 'sort'));
    }
    
    public function create()
    {
        $products = Product::all();
        $stores = Store::all();
        return view('price.create', compact('products', 'stores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'data' => 'required|string|max:255|min:3',
            'price' => 'required|numeric|min:1',
            'presentation' => 'required|string|max:255|min:2',
            'id_product' => 'required|exists:products,id',
            'id_store' => 'required|exists:stores,id',
        ]);

        Price::create([
            'data' => $request->data,
            'price' => $request->price,
            'presentation' => $request->presentation,
            'id_product' => $request->id_product,
            'id_store' => $request->id_store,
        ]);

        return redirect()->route('price.index')->with('success', 'Price created successfully.');
    }

    public function edit($id)
    {
        $price = Price::find($id);
        $products = Product::all();
        $stores = Store::all();
        return view('price.edit', compact('price', 'products', 'stores'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'data' => 'required|string|max:255',
            'price' => 'required|numeric',
            'presentation' => 'required|string|max:255',
        ]);

        $price = Price::find($id);

        $price->update([
            'data' => $request->data,
            'price' => $request->price,
            'presentation' => $request->presentation,
        ]);

        return redirect()->route('price.index')->with('success', 'Price updated successfully.');
    }

    public function destroy($id)
    {
        $price = Price::find($id);
        $price->delete();

        return redirect()->route('price.index')->with('success', 'Price deleted successfully.');
    }

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

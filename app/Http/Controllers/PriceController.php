<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;
use App\Models\Product;
use App\Models\Store;



class PriceController extends Controller
{
    public function index(Request $request)
    {
        $sort = $request->input('sort', 'asc'); // Obtener el parámetro de orden (asc por defecto)

        $prices = Price::with(['product', 'store'])
        ->orderBy('price', $sort) // Ordenar por precio según el parámetro de orden
        ->paginate(20);
        $products = Product::all();
        $stores = Store::all();
        return view('price.index', compact('prices', 'products', 'stores'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'data' => 'required|string|max:255',
            'price' => 'required|numeric',
            'presentation' => 'required|string|max:255',
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

    public function update(Request $request, $id_product, $id_store)
    {
        $request->validate([
            'data' => 'required|string|max:255',
            'price' => 'required|numeric',
            'presentation' => 'required|string|max:255',
        ]);

        $price = Price::where('id_product', $id_product)
                      ->where('id_store', $id_store)
                      ->firstOrFail();

        $price->update([
            'data' => $request->data,
            'price' => $request->price,
            'presentation' => $request->presentation,
        ]);

        return redirect()->route('price.index')->with('success', 'Price updated successfully.');
    }

    public function destroy($id_product, $id_store)
    {
        $price = Price::where('id_product', $id_product)
                      ->where('id_store', $id_store)
                      ->firstOrFail();

        $price->delete();

        return redirect()->route('price.index')->with('success', 'Price deleted successfully.');
    }
}

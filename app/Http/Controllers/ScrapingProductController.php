<?php
// app/Http/Controllers/ScrapingProductController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScrapingProduct;
use App\Models\Product;
use App\Models\Store;

class ScrapingProductController extends Controller
{
    public function index()
    {
        $scrapingProducts = ScrapingProduct::with('product', 'store')->get();
        $products = Product::all(); // Obtener todos los productos
        $stores = Store::all(); // Obtener todas las tiendas
        return view('scraping_product.index', compact('scrapingProducts', 'products', 'stores'));
    }
    
    
    
    public function store(Request $request)
    {
        $scrapingProduct = new ScrapingProduct;
        $scrapingProduct->slug = $request->input('slug');
        $scrapingProduct->id_product = $request->input('id_product');
        $scrapingProduct->id_store = $request->input('id_store');
        $scrapingProduct->status = $request->input('status', true);
        $scrapingProduct->save();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $scrapingProduct = ScrapingProduct::find($id);
        $scrapingProduct->slug = $request->input('slug');
        $scrapingProduct->id_product = $request->input('id_product');
        $scrapingProduct->id_store = $request->input('id_store');
        $scrapingProduct->status = $request->input('status');
        $scrapingProduct->update();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $scrapingProduct = ScrapingProduct::find($id);
        $scrapingProduct->delete();
        return redirect()->back();
    }
}

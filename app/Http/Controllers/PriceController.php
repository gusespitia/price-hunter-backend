<?php
// app/Http/Controllers/PriceController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;
use App\Models\ScrapingProduct;

class PriceController extends Controller
{
    public function index()
    {
        $prices = Price::with('scrapingProduct')->get();
        $scrapingProducts = ScrapingProduct::all(); // Obtener todos los productos de rastreo
        return view('price.index', compact('prices', 'scrapingProducts'));
    }
    
    
    public function store(Request $request)
    {
        $price = new Price;
        $price->combo_id = $request->input('combo_id');
        $price->data = $request->input('data');
        $price->price = $request->input('price');
        $price->scraping_products_id = $request->input('scraping_products_id');
        $price->save();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $price = Price::find($id);
        $price->combo_id = $request->input('combo_id');
        $price->data = $request->input('data');
        $price->price = $request->input('price');
        $price->scraping_products_id = $request->input('scraping_products_id');
        $price->update();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $price = Price::find($id);
        $price->delete();
        return redirect()->back();
    }
}

<?php
// app/Http/Controllers/ScrapingProductController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScrapingProduct;
use App\Models\Product;
use App\Models\Store;


class ScrapingProductController extends Controller
{
    public function index(Request $request)
    {
        // Obtener parámetros de consulta
        $productName = $request->input('product_name');
        $storeId = $request->input('store');

        // Aplicar filtros si se proporcionan
        $query = ScrapingProduct::with('product', 'store');
        if ($productName) {
            $query->whereHas('product', function($query) use ($productName) {
                $query->where('name', 'like', "%$productName%");
            });
        }
        if ($storeId) {
            $query->where('id_store', $storeId);
        }

        // Aplicar ordenamiento si se proporciona
        $column = $request->input('column', 'id'); // Columna predeterminada para ordenamiento
        $sort = $request->input('sort', 'asc'); // Orden predeterminado
        $query->orderBy($column, $sort);

        // Obtener los scraping products paginados
        $scrapingProducts = $query->paginate(10);

        // Obtener todos los productos y tiendas para los filtros
        $products = Product::all();
        $stores = Store::all();

        // Devolver vista con datos
        return view('scraping_product.index', compact('scrapingProducts', 'products', 'stores'));
    }
    
      // Método api para devolver los scraping products con la fecha de hoy y status 1
  
    
    
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

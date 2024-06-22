<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScrapingProduct;
use App\Models\Product;
use App\Models\Store;

class ScrapingProductController extends Controller
{
    public function index(Request $request)
    {
        $productName = $request->input('product_name');
        $storeId = $request->input('store');

        $query = ScrapingProduct::with('product', 'store');
        if ($productName) {
            $query->whereHas('product', function($query) use ($productName) {
                $query->where('name', 'like', "%$productName%");
            });
        }
        if ($storeId) {
            $query->where('id_store', $storeId);
        }

        $column = $request->input('column', 'id');
        $sort = $request->input('sort', 'asc');
        $query->orderBy($column, $sort);

        $scrapingProducts = $query->paginate(10);
        $products = Product::all();
        $stores = Store::all();

        return view('scraping_product.index', compact('scrapingProducts', 'products', 'stores'));
    }
    
    public function create()
    {
        $products = Product::all();
        $stores = Store::all();
        return view('scraping_product.create', compact('products', 'stores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required|string|max:255|min:3',
            'id_product' => 'required|exists:products,id',
            'id_store' => 'required|exists:stores,id',
            'status' => 'boolean',
        ]);

        ScrapingProduct::create([
            'slug' => $request->slug,
            'id_product' => $request->id_product,
            'id_store' => $request->id_store,
            'status' => $request->status ?? 1,
        ]);

        return redirect()->route('scraping_product.index')->with('success', 'Scraping Product created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'slug' => 'sometimes|required|string|max:255|min:3',
            'id_product' => 'sometimes|required|exists:products,id',
            'id_store' => 'sometimes|required|exists:stores,id',
            'status' => 'sometimes|boolean',
        ]);

        $scrapingProduct = ScrapingProduct::find($id);
        $scrapingProduct->update($request->only('slug', 'id_product', 'id_store', 'status'));

        return redirect()->route('scraping_product.index')->with('success', 'Scraping Product updated successfully.');
    }

    public function destroy($id)
    {
        $scrapingProduct = ScrapingProduct::find($id);
        $scrapingProduct->delete();

        return redirect()->route('scraping_product.index')->with('success', 'Scraping Product deleted successfully.');
    }
}

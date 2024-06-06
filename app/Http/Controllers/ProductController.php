<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
// app/Http/Controllers/ProductController.php


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(10);;
        $categories = Category::all(); // Obtener todas las categorías
        return view('product.index', compact('products', 'categories'));
    }




       // Método indexApi para devolver todos los productos en formato JSON
       public function indexApi()
       {
           $products = Product::with('category')->get();
           if (count($products) == 0) {
            return response()->json(['message' => 'There are no products.'], 404);
        }
           return response()->json($products);
       }
       // Método API para obtener productos por categoría
    public function getProductsByCategory(Request $request, $category)
    {
        // Formatear el nombre de la categoría
        $categoryNameFormatted = strtolower(str_replace(' ', '', $category));

        // Buscar la categoría en la base de datos
        $category = Category::where('name', 'LIKE', "%$categoryNameFormatted%")->first();

        if (!$category) {
            return response()->json(['message' => 'Category not found.'], 404);
        }

        // Obtener productos de la categoría encontrada
        $products = Product::with('category')->where('id_category', $category->id)->get();

        if ($products->isEmpty()) {
            return response()->json(['message' => 'There are no products in this category.'], 404);
        }

        return response()->json($products);
    }

public function showApi($id)
{
    $product = Product::with('category')->find($id);
    if (!$product) {
        return response()->json(['message' => 'Product not found.'], 404);
    }
    return response()->json($product);
}


    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->picture = $request->input('picture');
        $product->status = $request->input('status', true);
        $product->weight = $request->input('weight');
        $product->presentation = $request->input('presentation');
        $product->id_category = $request->input('id_category');
        $product->save();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->picture = $request->input('picture');
        $product->status = $request->input('status', true);
        $product->weight = $request->input('weight');
        $product->presentation = $request->input('presentation');
        $product->id_category = $request->input('id_category');
        $product->update();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\api\v1;


use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
class ProductController extends Controller
{
  
    
    public function indexApi(Request $request)
    {
        $query = Product::with('category');

        // Aplicar filtros si existen
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }
        if ($request->filled('category')) {
            $query->where('id_category', $request->input('category'));
        }
        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        $products = $query->get();

        // Verificar si hay productos
        if ($products->isEmpty()) {
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

 
    
}

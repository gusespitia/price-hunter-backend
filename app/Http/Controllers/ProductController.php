<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(Request $request)
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
    
        // Aplicar ordenación si existen los parámetros
        if ($request->filled('sort') && $request->filled('column')) {
            $column = $request->input('column');
    
            // Ajustar el nombre de columna si es 'category_id'
            if ($column === 'category_id') {
                $column = 'id_category';
            }
    
            $query->orderBy($column, $request->input('sort'));
        }
    
        $products = $query->paginate(10);
        $categories = Category::all(); // Obtener todas las categorías
    
        return view('product.index', compact('products', 'categories'));
    }
    
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

    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:3',
            'picture' => 'required|string|url|min:3',
            'status' => 'boolean',
            'weight' => 'required|string|max:45|min:3',
            'presentation' => 'required|string|max:255|min:3',
            'id_category' => 'required|exists:categories,id',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $product = new Product;
        $product->name = $request->input('name');
        $product->picture = $request->input('picture');
        $product->status = $request->input('status', true);
        $product->weight = $request->input('weight');
        $product->presentation = $request->input('presentation');
        $product->id_category = $request->input('id_category');
        $product->save();
    
        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }
    
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'picture' => 'sometimes|required|string',
            'status' => 'boolean',
            'weight' => 'sometimes|required|string|max:45',
            'presentation' => 'sometimes|required|string|max:255',
            'id_category' => 'sometimes|required|exists:categories,id',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->picture = $request->input('picture');
        $product->status = $request->input('status', true);
        $product->weight = $request->input('weight');
        $product->presentation = $request->input('presentation');
        $product->id_category = $request->input('id_category');
        $product->update();
    
        return redirect()->route('product.index')->with('success', 'Product updated successfully.');
    }
    
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }
    
}

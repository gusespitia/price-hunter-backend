<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
  
    public function index(Request $request)
    {
        $columnName = $request->input('column_name');
        $sort = $request->input('sort', 'asc'); 
        $categoryName = $request->input('category_name');
    
        $query = Category::query();
        if ($columnName) {
            $query->orderBy($columnName, $sort);
        }
        
        if ($categoryName) {
            $query->where('name', 'like', '%' . $categoryName . '%');
        }
    
        $categories = $query->get();
    
        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:3',
            'status' => 'boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $category = new Category;
        $category->name = $request->input('name');
        $category->status = $request->input('status', true);
        $category->save();

        return redirect()->route('category.index')->with('success', 'Category created successfully.');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'status' => 'boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->status = $request->input('status');
        $category->update();

        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    }

   
    public function indexApi(Request $request)
    {
        // // Verificar si el usuario está autenticado utilizando la guardia 'api'
        // if (!Auth::guard('api')->check()) {
        //     // Devolver una respuesta JSON indicando que el usuario no está autorizado
        //     return response()->json(['error' => 'Unauthorized. Please provide a valid authentication token.'], 401);
        // }

        // Crear una nueva consulta para el modelo Category
        $query = Category::query();

        // Aplicar filtros si existen
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }
        if ($request->filled('id')) {
            $query->where('id', $request->input('id'));
        }
        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        // Ejecutar la consulta y obtener todas las categorías
        $categories = $query->get();

        // Verificar si hay categorías
        if ($categories->isEmpty()) {
            return response()->json(['message' => 'There are no categories.'], 404);
        }

        // Devolver una respuesta JSON con las categorías
        return response()->json($categories);
    }

    // Método para manejar la ruta GET /categories/{categoryName}
    public function getProductsByCategory($categoryName)
    {
        // // Verificar si el usuario está autenticado utilizando la guardia 'api'
        // if (!Auth::guard('api')->check()) {
        //     // Devolver una respuesta JSON indicando que el usuario no está autorizado
        //     return response()->json(['error' => 'Unauthorized. Please provide a valid authentication token.'], 401);
        // }

        $category = Category::where('name', $categoryName)->first();

        if (!$category) {
            return response()->json(['message' => 'Category not found.'], 404);
        }

        $products = $category->products; // Asumiendo que hay una relación definida en el modelo Category

        return response()->json($products);
    }

    // Método para manejar la ruta GET /categoriesById/{id}
    public function getCategoriesById($id)
    {
        // // Verificar si el usuario está autenticado utilizando la guardia 'api'
        // if (!Auth::guard('api')->check()) {
        //     // Devolver una respuesta JSON indicando que el usuario no está autorizado
        //     return response()->json(['error' => 'Unauthorized. Please provide a valid authentication token.'], 401);
        // }

        $category = Category::find($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found.'], 404);
        }

        return response()->json($category);
    }

   
}

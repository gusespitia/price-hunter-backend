<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    // En el método index del controlador
    public function index(Request $request)
    {
      

        // Obtener parámetros de consulta
        $columnName = $request->input('column_name');
        $sort = $request->input('sort', 'asc'); // Orden predeterminado
        $categoryName = $request->input('category_name');
    
        // Aplicar ordenamiento si se proporciona
        $query = Category::query();
        if ($columnName) {
            $query->orderBy($columnName, $sort);
        }
        
        // Aplicar filtro por nombre de categoría si se proporciona
        if ($categoryName) {
            $query->where('name', 'like', '%' . $categoryName . '%');
        }
    
        // Obtener todas las categorías
        $categories = $query->get();
    
        // Devolver vista con datos
        return view('category.index', compact('categories'));
    }

    /**
     * Handles the route GET /categories
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
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
        // Verificar si el usuario está autenticado utilizando la guardia 'api'
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

    public function store(Request $request)
    {
        // // Verificar si el usuario está autenticado utilizando la guardia 'api'
        // if (!Auth::guard('api')->check()) {
        //     // Devolver una respuesta JSON indicando que el usuario no está autorizado
        //     return response()->json(['error' => 'Unauthorized. Please provide a valid authentication token.'], 401);
        // }

        $category = new Category;
        $category->name = $request->input('name');
        $category->status = $request->input('status', true);
        $category->save();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        // // Verificar si el usuario está autenticado utilizando la guardia 'api'
        // if (!Auth::guard('api')->check()) {
        //     // Devolver una respuesta JSON indicando que el usuario no está autorizado
        //     return response()->json(['error' => 'Unauthorized. Please provide a valid authentication token.'], 401);
        // }

        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->status = $request->input('status');
        $category->update();
        return redirect()->back();
    }

    public function destroy($id)
    {
        // // Verificar si el usuario está autenticado utilizando la guardia 'api'
        // if (!Auth::guard('api')->check()) {
        //     // Devolver una respuesta JSON indicando que el usuario no está autorizado
        //     return response()->json(['error' => 'Unauthorized. Please provide a valid authentication token.'], 401);
        // }

        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
  
   
   
    public function indexApi(Request $request)
    {
        

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
    public function getProductsByCategoryName($categoryName)
    {
     

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
      

        $category = Category::find($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found.'], 404);
        }

        return response()->json($category);
    }

   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

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
  

    
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->input('name');
        $category->status = $request->input('status', true);
        $category->save();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->status = $request->input('status');
        $category->update();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}

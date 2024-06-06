<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        // Obtener parámetros de consulta
        $columnName = $request->input('column_name');
        $sort = $request->input('sort', 'asc'); // Orden predeterminado

        // Aplicar ordenamiento si se proporciona
        $query = Category::query();
        if ($columnName) {
            $query->orderBy($columnName, $sort);
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

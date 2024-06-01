<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //METODO PARA GUARDAR
        $category = new Category;
        // PARA CORREGIR    $products->id = $request->input('id_product');
        $category->category_name = $request->input('category_name');
        $category->save();
        return redirect()->back();

    }

  
    public function update(Request $request, $id)
    {
        //
        //METODO PARA EDITAR
        $category = Category::find($id);
        // PARA CORREGIR     $products->id = $request->input('id_product');
        $category->product_name = $request->input('product_name');
        $category->product_picture = $request->input('product_picture');
        $category->product_weight = $request->input('product_weight');
        // PARA CORREGIR    $products->product_picture = $request->input('id_product_category');
        $category->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // CAMBIAR STAUTRS EN VEZ DE ELIMINAR
        $category = Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}

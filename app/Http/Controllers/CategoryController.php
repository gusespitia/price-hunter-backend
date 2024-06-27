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
    
        $categories = $query->paginate(10);
     
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

   
 
   
}

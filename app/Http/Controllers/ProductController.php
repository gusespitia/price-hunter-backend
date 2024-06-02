<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->input('name');
        $product->picture = $request->input('picture');
        $product->status = $request->input('status', true);
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

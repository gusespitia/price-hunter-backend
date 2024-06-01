<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource for web interface.
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->product_name = $request->input('product_name');
        $product->product_picture = $request->input('product_picture');
        $product->product_weight = $request->input('product_weight');
        $product->save();
        return redirect()->back();
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->product_name = $request->input('product_name');
        $product->product_picture = $request->input('product_picture');
        $product->product_weight = $request->input('product_weight');
        $product->save();
        return redirect()->back();
    }

    /**
     * Display a listing of the resource for API.
     */
    public function indexApi()
    {
        $products = Product::all();
        return Response::json($products);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // CAMBIAR STATUS EN VEZ DE ELIMINAR
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }
}

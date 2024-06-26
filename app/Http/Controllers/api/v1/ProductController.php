<?php

namespace App\Http\Controllers\api\v1;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Get list of products.
     *
     * @group Products
     *
     * @queryParam name string Filter by product name. Example: Laptop
     * @queryParam category integer Filter by category ID. Example: 1
     * @queryParam status boolean Filter by product status. Example: true
     *
     * @response 200 {
     *     "id": 1,
     *     "name": "Laptop",
     *     "category_id": 1,
     *     "created_at": "2021-09-15T14:59:48.000000Z",
     *     "updated_at": "2021-09-15T14:59:48.000000Z"
     * }
     * @response 404 {
     *     "message": "There are no products."
     * }
     */
    public function indexApi(Request $request)
    {
        $query = Product::with('category');

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

        if ($products->isEmpty()) {
            return response()->json(['message' => 'There are no products.'], 404);
        }

        return response()->json($products);
    }

    /**
     * Get products by category.
     *
     * @group Products
     *
     * @urlParam category string required The name of the category. Example: Electronics
     *
     * @response 200 {
     *     "id": 1,
     *     "name": "Laptop",
     *     "category_id": 1,
     *     "created_at": "2021-09-15T14:59:48.000000Z",
     *     "updated_at": "2021-09-15T14:59:48.000000Z"
     * }
     * @response 404 {
     *     "message": "Category not found or no products found."
     * }
     */
    public function getProductsByCategory(Request $request, $category)
    {
        $categoryNameFormatted = strtolower(str_replace(' ', '', $category));

        $category = Category::where('name', 'LIKE', "%$categoryNameFormatted%")->first();

        if (!$category) {
            return response()->json(['message' => 'Category not found.'], 404);
        }

        $products = Product::with('category')->where('id_category', $category->id)->get();

        if ($products->isEmpty()) {
            return response()->json(['message' => 'There are no products in this category.'], 404);
        }

        return response()->json($products);
    }

    /**
     * Get product by ID.
     *
     * @group Products
     *
     * @urlParam id integer required The ID of the product. Example: 1
     *
     * @response 200 {
     *     "id": 1,
     *     "name": "Laptop",
     *     "category_id": 1,
     *     "created_at": "2021-09-15T14:59:48.000000Z",
     *     "updated_at": "2021-09-15T14:59:48.000000Z"
     * }
     * @response 404 {
     *     "message": "Product not found."
     * }
     */
    public function showApi($id)
    {
        $product = Product::with('category')->find($id);
        if (!$product) {
            return response()->json(['message' => 'Product not found.'], 404);
        }
        return response()->json($product);
    }
}

<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * List all categories.
     *
     * @group Categories
     *
     * @queryParam name string Filter by category name. Example: Electronics
     * @queryParam id integer Filter by category ID. Example: 1
     * @queryParam status boolean Filter by category status. Example: true
     *
     * @response 200 {
     *     "id": 1,
     *     "name": "Electronics",
     *     "status": true,
     *     "created_at": "2021-09-15T14:59:48.000000Z",
     *     "updated_at": "2021-09-15T14:59:48.000000Z"
     * }
     */
    public function indexApi(Request $request)
    {
        $query = Category::query();

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }
        if ($request->filled('id')) {
            $query->where('id', $request->input('id'));
        }
        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        $categories = $query->get();

        if ($categories->isEmpty()) {
            return response()->json(['message' => 'There are no categories.'], 404);
        }

        return response()->json($categories);
    }

    /**
     * Get products by category name.
     *
     * @group Categories
     *
     * @urlParam categoryName string required The name of the category. Example: Electronics
     *
     * @response 200 {
     *     "id": 1,
     *     "name": "Laptop",
     *     "category_id": 1,
     *     "created_at": "2021-09-15T14:59:48.000000Z",
     *     "updated_at": "2021-09-15T14:59:48.000000Z"
     * }
     * @response 404 {
     *     "message": "Category not found."
     * }
     */
    public function getProductsByCategoryName($categoryName)
    {
        $category = Category::where('name', $categoryName)->first();

        if (!$category) {
            return response()->json(['message' => 'Category not found.'], 404);
        }

        $products = $category->products;

        return response()->json($products);
    }

    /**
     * Get category by ID.
     *
     * @group Categories
     *
     * @urlParam id integer required The ID of the category. Example: 1
     *
     * @response 200 {
     *     "id": 1,
     *     "name": "Electronics",
     *     "status": true,
     *     "created_at": "2021-09-15T14:59:48.000000Z",
     *     "updated_at": "2021-09-15T14:59:48.000000Z"
     * }
     * @response 404 {
     *     "message": "Category not found."
     * }
     */
    public function getCategoriesById($id)
    {
        $category = Category::find($id);

        if (!$category) {
            return response()->json(['message' => 'Category not found.'], 404);
        }

        return response()->json($category);
    }
}

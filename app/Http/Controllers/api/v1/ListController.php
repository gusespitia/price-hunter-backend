<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Models\CustomerList;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    /**
     * Get list of lists.
     *
     * @group Lists
     * @authenticated
     *
     * @response 200 {
     *     "id": 1,
     *     "customer_id": 1,
     *     "product_id": 1,
     *     "created_at": "2021-09-15T14:59:48.000000Z",
     *     "updated_at": "2021-09-15T14:59:48.000000Z",
     *     "product": {
     *         "id": 1,
     *         "name": "Product Name",
     *         "category_id": 1,
     *         "created_at": "2021-09-15T14:59:48.000000Z",
     *         "updated_at": "2021-09-15T14:59:48.000000Z"
     *     }
     * }
     */
    public function index()
    {
        $user = Auth::user();
        \Log::info('Authenticated User:', ['user' => $user]);

        $lists = $user->lists()->with('product')->get();
        \Log::info('Fetched Lists:', $lists->toArray());

        return response()->json($lists);
    }

    /**
     * Create a new list.
     *
     * @group Lists
     * @authenticated
     *
     * @bodyParam products array required Array of product IDs. Example: [1, 2, 3]
     *
     * @response 201 {
     *     "id": 1,
     *     "customer_id": 1,
     *     "product_id": 1,
     *     "created_at": "2021-09-15T14:59:48.000000Z",
     *     "updated_at": "2021-09-15T14:59:48.000000Z"
     * }
     * @response 422 {
     *     "message": "Validation error",
     *     "errors": {
     *         "products": ["The selected product is invalid."]
     *     }
     * }
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'products' => 'required|array',
            'products.*' => 'exists:products,id',
        ]);

        $customer = Auth::user();

        $lists = [];
        foreach ($validatedData['products'] as $productId) {
            $lists[] = CustomerList::create([
                'customer_id' => $customer->id,
                'product_id' => $productId,
            ]);
        }

        return response()->json($lists, 201);
    }

    /**
     * Get a list by ID.
     *
     * @group Lists
     * @authenticated
     *
     * @urlParam id integer required The ID of the list. Example: 1
     *
     * @response 200 {
     *     "id": 1,
     *     "customer_id": 1,
     *     "product_id": 1,
     *     "created_at": "2021-09-15T14:59:48.000000Z",
     *     "updated_at": "2021-09-15T14:59:48.000000Z"
     * }
     * @response 404 {
     *     "message": "List not found"
     * }
     */
    public function show($id)
    {
        $list = Auth::user()->lists()->with('product')->findOrFail($id);
        return response()->json($list);
    }

    /**
     * Update a list by ID.
     *
     * @group Lists
     * @authenticated
     *
     * @urlParam id integer required The ID of the list. Example: 1
     * @bodyParam products array required Array of product IDs. Example: [1, 2, 3]
     *
     * @response 200 {
     *     "id": 1,
     *     "customer_id": 1,
     *     "product_id": 1,
     *     "created_at": "2021-09-15T14:59:48.000000Z",
     *     "updated_at": "2021-09-15T14:59:48.000000Z"
     * }
     * @response 404 {
     *     "message": "List not found"
     * }
     * @response 422 {
     *     "message": "Validation error",
     *     "errors": {
     *         "products": ["The selected product is invalid."]
     *     }
     * }
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'products' => 'required|array',
            'products.*' => 'exists:products,id',
        ]);

        $list = Auth::user()->lists()->findOrFail($id);
        $list->update([
            'product_id' => $validatedData['products'],
        ]);

        return response()->json($list);
    }

    /**
     * Delete a list by ID.
     *
     * @group Lists
     * @authenticated
     *
     * @urlParam id integer required The ID of the list. Example: 1
     *
     * @response 204 {
     *     "message": "List deleted successfully"
     * }
     * @response 404 {
     *     "message": "List not found"
     * }
     */
    public function destroy($id)
    {
        $list = Auth::user()->lists()->findOrFail($id);
        $list->delete();
        return response()->json(null, 204);
    }
}

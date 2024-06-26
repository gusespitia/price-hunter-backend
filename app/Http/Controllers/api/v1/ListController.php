<?php
namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Models\CustomerList; 
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        \Log::info('Authenticated User:', ['user' => $user]);

        $lists = $user->lists()->with('product')->get();
        \Log::info('Fetched Lists:', $lists->toArray());

        return response()->json($lists);
    }

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

    public function show($id)
    {
        $list = Auth::user()->lists()->with('product')->findOrFail($id);
        return response()->json($list);
    }

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

    public function destroy($id)
    {
        $list = Auth::user()->lists()->findOrFail($id);
        $list->delete();
        return response()->json(null, 204);
    }
}

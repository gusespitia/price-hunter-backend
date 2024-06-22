<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class StoreController extends Controller
{
    public function index(Request $request)
    {
        $stores = Store::query();

        if ($request->filled('store_name')) {
            $stores->where('name', 'like', '%' . $request->input('store_name') . '%');
        }

        if ($request->filled('status')) {
            $stores->where('status', $request->input('status'));
        }

        if ($request->filled('column') && $request->filled('sort')) {
            $stores->orderBy($request->input('column'), $request->input('sort'));
        }

        $stores = $stores->paginate(10);

        return view('store.index', compact('stores'));
    }

    public function create()
    {
        return view('store.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:3',
            'url_base' => 'required|url',
            'logo' => 'required|url',
            'status' => 'sometimes|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $store = new Store;
        $store->name = $request->input('name');
        $store->url_base = $request->input('url_base');
        $store->logo = $request->input('logo');
        $store->status = $request->input('status', true);
        $store->save();

        return redirect()->route('store.index')->with('success', 'Store created successfully.');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255|min:3',
            'url_base' => 'sometimes|required|url',
            'logo' => 'sometimes|required|url',
            'status' => 'sometimes|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $store = Store::find($id);
        $store->name = $request->input('name');
        $store->url_base = $request->input('url_base');
        $store->logo = $request->input('logo');
        $store->status = $request->input('status');
        $store->update();

        return redirect()->route('store.index')->with('success', 'Store updated successfully.');
    }

    public function destroy($id)
    {
        $store = Store::find($id);
        $store->delete();

        return redirect()->route('store.index')->with('success', 'Store deleted successfully.');
    }

    public function indexApi()
    {
        $stores = Store::all();
        return response()->json($stores);
    }
}


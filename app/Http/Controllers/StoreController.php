<?php
// app/Http/Controllers/StoreController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;


class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::all();
        return view('store.index', compact('stores'));
    }
    
    public function store(Request $request)
    {
        $store = new Store;
        $store->name = $request->input('name');
        $store->url_base = $request->input('url_base');
        $store->logo = $request->input('logo');
        $store->status = $request->input('status', true);
        $store->save();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $store = Store::find($id);
        $store->name = $request->input('name');
        $store->url_base = $request->input('url_base');
        $store->logo = $request->input('logo');
        $store->status = $request->input('status');
        $store->update();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $store = Store::find($id);
        $store->delete();
        return redirect()->back();
    }
}

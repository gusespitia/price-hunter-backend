<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::all();
        return view('store.index', compact('stores'));
    }
    public function store(Request $request)
    {
        //METODO PARA GUARDAR


    }
    public function update(Request $request, $id)
    { 
     
        //METODO PARA Actualizar
        $store = Store::find($id);   
        $store->store_name = $request->input('store_name');
        $store->store_url = $request->input('store_url');
        $store->store_logo = $request->input('store_logo');     
        $store->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // CAMBIAR STAUTRS EN VEZ DE ELIMINAR
        $store = Store::find($id);
        $store->delete();
        return redirect()->back();
    }
}

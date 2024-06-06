<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    public function index(Request $request)
    {
        // Obtener todos los almacenes
        $stores = Store::query();

        // Filtrar por nombre de tienda si se proporciona
      // Filtrar por nombre de tienda si se proporciona
if ($request->filled('store_name')) {
    $stores->where('name', 'like', '%' . $request->input('store_name') . '%');
}


        // Filtrar por estado si se proporciona
        if ($request->filled('status')) {
            $stores->where('status', $request->input('status'));
        }

        // Ordenar por columna y dirección si se proporciona
        if ($request->filled('column') && $request->filled('sort')) {
            $stores->orderBy($request->input('column'), $request->input('sort'));
        }

        // Obtener los almacenes paginados
        $stores = $stores->paginate(10);

        // Devolver la vista con los almacenes
        return view('store.index', compact('stores'));
    }
    
    public function store(Request $request)
    {
        // Crear un nuevo almacén
        $store = new Store;
        $store->name = $request->input('name');
        $store->url_base = $request->input('url_base');
        $store->logo = $request->input('logo');
        $store->status = $request->input('status', true);
        $store->save();

        // Redirigir de vuelta a la página anterior
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        // Actualizar un almacén existente
        $store = Store::find($id);
        $store->name = $request->input('name');
        $store->url_base = $request->input('url_base');
        $store->logo = $request->input('logo');
        $store->status = $request->input('status');
        $store->update();

        // Redirigir de vuelta a la página anterior
        return redirect()->back();
    }

    public function destroy($id)
    {
        // Eliminar un almacén existente
        $store = Store::find($id);
        $store->delete();

        // Redirigir de vuelta a la página anterior
        return redirect()->back();
    }
}

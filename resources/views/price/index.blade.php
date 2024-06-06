<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Prices') }}
        </h2>
    </x-slot>

    <x-slot name="title">
        {{ __('Prices') }}
    </x-slot>

    <main>
        <div class="container mt-4">
            <!-- Filter options -->
            <div class="mb-3">
                <form method="GET" action="{{ route('price.index') }}">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 mb-2">
                            <input type="text" class="form-control" placeholder="Product Name" name="product_name">
                        </div>
                     
                        <div class="col-md-2 col-sm-6 mb-2">
                            <input type="date" class="form-control" name="datum">
                        </div>
                        <div class="col-md-2 col-sm-6 mb-2">
                            <select class="form-select" name="store">
                                <option value="">Select Store</option>
                                <!-- Populate with store options -->
                                @foreach($stores as $store)
                                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-2">
                            <button type="submit" class="btn btn-primary w-100">Apply Filters</button>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-2">
                            <a href="{{ route('price.index') }}" class="btn btn-warning"><x-icons.refresh /> </a>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Verificar si hay precios para mostrar -->
            @if($prices->isEmpty())
                <div class="alert alert-warning" role="alert">
                    There is no information with the filters applied
                     <!-- Button to reset filters -->
                    <a href="{{ route('scraping_product.index') }}" class="btn btn-warning"><x-icons.refresh /> </a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">
                                    ID
                                    <div class="dropdown d-inline">
                                        <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"  id="dropdownMenuButton20" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="{{ route('price.index', ['sort' => 'asc', 'column' => 'id']) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                            <li><a class="dropdown-item" href="{{ route('price.index', ['sort' => 'desc', 'column' => 'id']) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th scope="col">
                                    Product Name
                                    <div class="dropdown d-inline">
                                        <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"  id="dropdownMenuButton21" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <li><a class="dropdown-item" href="{{ route('price.index', ['sort' => 'asc', 'column' => 'data']) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                            <li><a class="dropdown-item" href="{{ route('price.index', ['sort' => 'desc', 'column' => 'data']) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th scope="col">
                                    Price
                                    <div class="dropdown d-inline">
                                        <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"  id="dropdownMenuButton22" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                            <li><a class="dropdown-item" href="{{ route('price.index', ['sort' => 'asc', 'column' => 'price']) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                            <li><a class="dropdown-item" href="{{ route('price.index', ['sort' => 'desc', 'column' => 'price']) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th scope="col">
                                    Store
                                    <div class="dropdown d-inline">
                                        <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"  id="dropdownMenuButton23" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                            <li><a class="dropdown-item" href="{{ route('price.index', ['sort' => 'asc', 'column' => 'id_store']) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                            <li><a class="dropdown-item" href="{{ route('price.index', ['sort' => 'desc', 'column' => 'id_store']) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th scope="col">
                                    Product ID
                                    <div class="dropdown d-inline">
                                        <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"  id="dropdownMenuButton24" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                            <li><a class="dropdown-item" href="{{ route('price.index', ['sort' => 'asc', 'column' => 'id_product']) }}"><i class="bi bi-sort-ascending"></i>Active</a></li>
                                            <li><a class="dropdown-item" href="{{ route('price.index', ['sort' => 'desc', 'column' => 'id_product']) }}"><i class="bi bi-sort-descending"></i>Desc</a></li>
                                        </ul>
                                    </div>
                                </th>                          
                                <th scope="col">
                                    Created at
                                    <div class="dropdown d-inline">
                                        <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"  id="dropdownMenuButton25" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                            <li><a class="dropdown-item" href="{{ route('price.index', ['sort' => 'asc', 'column' => 'created_at']) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                            <li><a class="dropdown-item" href="{{ route('price.index', ['sort' => 'desc', 'column' => 'created_at']) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                        </ul>
                                    </div>
                                </th>                            
                                <th scope="col">
                                    Status
                                    <div class="dropdown d-inline">
                                        <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"  id="dropdownMenuButton26" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                            <li><a class="dropdown-item" href="{{ route('price.index', ['sort' => 'asc', 'column' => 'status']) }}"><i class="bi bi-sort-ascending"></i>Active</a></li>
                                            <li><a class="dropdown-item" href="{{ route('price.index', ['sort' => 'desc', 'column' => 'status']) }}"><i class="bi bi-sort-descending"></i>Inactive</a></li>
                                        </ul>
                                    </div>
                                </th>                     
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prices as $price)
                            <tr>
                                <td>{{ $price->id }}</td>
                                <td>{{ $price->data }}</td>
                                <td>{{ $price->price }}</td>                                         
                                <td>{{ $price->id_store }}</td>
                                <td>{{ $price->id_product }}</td>
                                <td>{{ $price->created_at }}</td>
                                <td>
                                    @if($price->status)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>                           
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $prices->links() }}
                </div>
            @endif
        </div>
    </main>
</x-app-layout>


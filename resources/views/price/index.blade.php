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
            <!-- Notification section -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
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
                                @foreach($stores as $store)
                                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-2 mb-2">
                            <button type="submit" class="btn btn-primary mr-2"><x-icons.search-circle /></button>
                            <a href="{{ route('price.index') }}" class="btn btn-warning"><x-icons.refresh /> </a>
                        </div>                       
                        <div class="col-md-3 col-sm-12 d-flex justify-content-end mb-2">
                            <a href="{{ route('price.create') }}" class="btn btn-primary">
                                <x-icons.plus-circle />
                            </a>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Verificar si hay precios para mostrar -->
            @if($prices->isEmpty())
                <div class="alert alert-warning" role="alert">
                    There is no information with the filters applied
                     <!-- Button to reset filters -->
                    <a href="{{ route('price.index') }}" class="btn btn-warning"><x-icons.refresh /> </a>
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
                                <th scope="col">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prices as $price)
                            <tr>
                                <td>{{ $price->id }}</td>
                                <td>{{ $price->data }}</td>
                                <td>{{ $price->price }}</td>                                         
                                <td>{{ $price->store->name }}</td>
                                <td>{{ $price->product->name }}</td>
                                <td>{{ $price->created_at }}</td>
                                <td>
                                    @if($price->status)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>   
                                <td class="d-flex">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success me-2 px-2"
                                        data-bs-toggle="modal" data-bs-target="#edit{{ $price->id }}">
                                        <x-icons.pencil />
                                    </button>
                                    <button type="button" class="btn btn-danger px-2" data-bs-toggle="modal"
                                        data-bs-target="#delete{{ $price->id }}">
                                        <x-icons.trash />
                                    </button>
                                </td>                        
                            </tr>
                            @include('price.info', ['price' => $price])
                            @endforeach
                        </tbody>
                    </table>
                    {{ $prices->links() }}
                </div>
            @endif
        </div>
    </main>
</x-app-layout>

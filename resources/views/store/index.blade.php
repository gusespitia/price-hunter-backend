<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Stores') }}
        </h2>
    </x-slot>

    <x-slot name="title">
        {{ __('Stores') }}
    </x-slot>

    <main class="relative">
        <div class="container mt-4">
            <!-- Filter options -->
            <div class="relative mb-3">
                    <form method="GET" action="{{ route('store.index') }}">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 mb-2">
                                <!-- Input for Store Name -->
<!-- Input for Store Name -->
<input type="text" class="form-control" placeholder="Store Name" name="store_name" value="{{ request()->query('store_name') }}">
                            </div>
                            <!-- Add more filter inputs as needed -->
                            <div class="col-md-2 col-sm-6 mb-2">
                                <!-- Button to apply filters -->
                                <button type="submit" class="btn btn-primary w-100">Apply Filters</button>
                            </div>
                            <div class="col-md-2 col-sm-6 mb-2">
                                <!-- Button to reset filters -->
                                <a href="{{ route('store.index') }}" class="btn btn-warning"><x-icons.refresh /> </a>
                            </div>
                            <div class="col-md-2 absolute w-content right-0 top-0 grid">
                                <button type="button" class="btn btn-primary relative pl-10 w-40" data-bs-toggle="modal" data-bs-target="#create">
                                    <x-icons.plus-circle class="absolute  "/>
                                    Product
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
    
      
            <div class="table-responsive">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Store ID
                                <div class="dropdown d-inline">
                                    <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"  id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-sort"></i>
                                    </span>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <li><a class="dropdown-item" href="{{ route('store.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'id'])) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                        <li><a class="dropdown-item" href="{{ route('store.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'id'])) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                    </ul>
                                </div>
                            </th>
                            
                            <th scope="col">Name    <div class="dropdown d-inline">
                                <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"  id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-sort"></i>
                                </span>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item" href="{{ route('store.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'id'])) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                    <li><a class="dropdown-item" href="{{ route('store.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'id'])) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                </ul>
                            </div></th>
                            <th scope="col">URL Base    <div class="dropdown d-inline">
                                <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"  id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-sort"></i>
                                </span>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item" href="{{ route('store.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'id'])) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                    <li><a class="dropdown-item" href="{{ route('store.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'id'])) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                </ul>
                            </div></th>
                            <th scope="col">Logo</th>
                            <th scope="col">Status    <div class="dropdown d-inline">
                                <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"  id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-sort"></i>
                                </span>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item" href="{{ route('store.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'id'])) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                    <li><a class="dropdown-item" href="{{ route('store.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'id'])) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                </ul>
                            </div></th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($stores as $store)
                        <tr>
                            <td>{{ $store->id }}</td>
                            <td>{{ $store->name }}</td>
                            <td>{{ $store->url_base }}</td>
                            <td><img src="{{ $store->logo }}" alt="{{ $store->name }}" class="img-thumbnail w-8"></td>
                            <td>{{ $store->status ? 'Active' : 'Inactive' }}</td>
                            <td class="d-flex">
                                <button type="button" class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#edit{{ $store->id }}">
                                    <x-icons.pencil />
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $store->id }}">
                                    <x-icons.trash />
                                </button>
                            </td>
                        </tr>
                        @include('store.info', ['store' => $store])
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('store.create')
        </div>
    </main>
</x-app-layout>

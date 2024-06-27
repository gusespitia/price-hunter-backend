<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-600 dark:text-gray-600 leading-tight">
            {{ __('Stores') }}
        </h2>
    </x-slot>

    <x-slot name="title">
        {{ __('Stores') }}
    </x-slot>

    <main class="relative">
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
            <div class="relative mb-3">
                <form method="GET" action="{{ route('store.index') }}">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 mb-2">
                            <input type="text" class="form-control" placeholder="Store Name" name="store_name" value="{{ request()->query('store_name') }}">
                        </div>
                        <div class="col-md-2 col-sm-2 mb-2">
                            <button type="submit" class="btn btn-primary mr-2"><x-icons.search-circle /></button>
                            <a href="{{ route('store.index') }}" class="btn btn-warning"><x-icons.refresh /> </a>
                        </div>
                        <div class="col-md-7 col-sm-12 d-flex justify-content-end mb-2">
                            <a href="{{ route('store.create') }}" class="btn btn-primary">
                                <x-icons.plus-circle />
                            </a>
                        </div>
                    </div>
                </form>
            </div>

            @if($stores->isEmpty())
                <div class="alert alert-warning" role="alert">
                    There is no information with the filters applied
                    <!-- Button to reset filters -->
                    <a href="{{ route('store.index') }}" class="btn btn-warning"><x-icons.refresh /> </a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-dark text-sm">
                        <thead>
                            <tr>
                                <th scope="col">Store ID
                                    <div class="dropdown d-inline">
                                        <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <li><a class="dropdown-item" href="{{ route('store.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'id'])) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                            <li><a class="dropdown-item" href="{{ route('store.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'id'])) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th scope="col">Name
                                    <div class="dropdown d-inline">
                                        <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <li><a class="dropdown-item" href="{{ route('store.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'name'])) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                            <li><a class="dropdown-item" href="{{ route('store.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'name'])) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th scope="col">URL Base
                                    <div class="dropdown d-inline">
                                        <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <li><a class="dropdown-item" href="{{ route('store.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'url_base'])) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                            <li><a class="dropdown-item" href="{{ route('store.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'url_base'])) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th scope="col">Logo</th>
                                <th scope="col">Status
                                    <div class="dropdown d-inline">
                                        <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <li><a class="dropdown-item" href="{{ route('store.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'status'])) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                            <li><a class="dropdown-item" href="{{ route('store.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'status'])) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th scope="col">Created at
                                    <div class="dropdown d-inline">
                                        <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <li><a class="dropdown-item" href="{{ route('store.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'created_at'])) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                            <li><a class="dropdown-item" href="{{ route('store.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'created_at'])) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                        </ul>
                                    </div>
                                </th>
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
                                    <td>
                                        @if($store->status)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td> 
                                    <td>{{ $store->created_at }}</td>
                                    <td class="d-flex">
                                        <button type="button" class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#edit{{ $store->id }}">
                                            <x-icons.pencil />
                                        </button>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $store->id }}">
                                            <x-icons.trash />
                                        </button>
                                        </form>
                                    </td>
                                </tr>
                                @include('store.info', ['store' => $store])
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </main>
</x-app-layout>

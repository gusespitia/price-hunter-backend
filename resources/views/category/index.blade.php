<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <x-slot name="title">
        {{ __('Categories') }}
    </x-slot>

    <main class="relative">
        <div class="container mt-4">
            <!-- Filter options -->
            <div class="relative mb-3">
                <form method="GET" action="{{ route('category.index') }}">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 mb-2">
                            <!-- Input for Category Name -->
                            <input type="text" class="form-control" placeholder="Category Name" name="category_name">
                        </div>
                        <div class="col-md-2 col-sm-2 mb-2">
                            <button type="submit" class="btn btn-primary mr-2"><x-icons.search-circle /></button>
                            <a href="{{ route('category.index') }}" class="btn btn-warning"><x-icons.refresh /> </a>
                        </div>                       
                        <div class="col-md-7 col-sm-12 d-flex justify-content-end mb-2">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                                <x-icons.plus-circle />
                            </button>
                        </div>   
                    </div>                
                </form>
            </div>
                <!-- Button trigger modal -->
                @if($categories->isEmpty())
                <div class="alert alert-warning" role="alert">
                    There is no information with the filters applied
                     <!-- Button to reset filters -->
                    <a href="{{ route('category.index') }}" class="btn btn-warning"><x-icons.refresh /> </a>
                </div>
            @else
            <!-- Table displaying categories -->
            <div class="table-responsive">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">
                                Category ID
                                <div class="dropdown d-inline">
                                    <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-sort"></i>
                                    </span>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <li><a class="dropdown-item" href="{{ route('category.index', ['column_name' => 'id', 'sort' => 'asc']) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                        <li><a class="dropdown-item" href="{{ route('category.index', ['column_name' => 'id', 'sort' => 'desc']) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                    </ul>
                                </div>
                            </th>
                            <th scope="col">
                                Name
                                <div class="dropdown d-inline">
                                    <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0" id="dropdownMenuButton11" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-sort"></i>
                                    </span>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <li><a class="dropdown-item" href="{{ route('category.index', ['column_name' => 'name', 'sort' => 'asc']) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                        <li><a class="dropdown-item" href="{{ route('category.index', ['column_name' => 'name', 'sort' => 'desc']) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                    </ul>
                                </div>
                            </th>
                            
                               Category ID
                               <div class="dropdown d-inline">
                                <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"  id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-sort"></i>
                                </span>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item" href="{{ route('category.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'id'])) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                    <li><a class="dropdown-item" href="{{ route('category.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'id'])) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                </ul>
                     
                            <th scope="col">Status
                                <div class="dropdown d-inline">
                                    <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"  id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-sort"></i>
                                    </span>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <li><a class="dropdown-item" href="{{ route('category.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'status'])) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                        <li><a class="dropdown-item" href="{{ route('category.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'status'])) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                    </ul>
                                </div>
                            </th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>
                                @if($category->status)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td> 
                            <td>
                                <!-- Buttons to edit and delete -->
                                <button type="button" class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#edit{{ $category->id }}">
                                    <x-icons.pencil />
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $category->id }}">
                                    <x-icons.trash />
                                </button>
                            </td>
                        </tr>
                        <!-- Include modals for edit and delete -->
                        @include('category.info', ['category' => $category])
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif
            <!-- Include modal for adding new category -->
            @include('category.create')
        </div>
    </main>
</x-app-layout>

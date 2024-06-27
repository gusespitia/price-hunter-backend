<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-600 dark:text-gray-600 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <x-slot name="title">
        {{ __('Categories') }}
    </x-slot>

    <main class="relative mx-auto">
        <div class="w-full mt-4 text-sm mx-auto container">
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
    <form method="GET" action="{{ route('category.index') }}">
        <div class="row">
            <div class="col-md-3 col-sm-6 mb-2">
                <input type="text" class="form-control" placeholder="Category Name" name="category_name">
            </div>
            <div class="col-md-1 col-sm-6 mb-2">
                <button type="submit" class="btn btn-primary w-100 mb-2 mb-sm-0"><x-icons.search-circle /></button>
            </div>
            <div class="col-md-1 col-sm-6 mb-2">
                <a href="{{ route('category.index') }}" class="btn btn-warning w-100 mb-2 mb-sm-0"><x-icons.refresh /></a>
            </div>
            <div class="col-md-1 col col-sm-12 d-flex justify-content-end mb-2">
                <a href="{{ route('category.create') }}" class="btn btn-primary w-100 w-md-auto">
                    <x-icons.plus-circle />
                </a>
            </div>
        </div>
    </form>
</div>


            @if($categories->isEmpty())
                <div class="alert alert-warning" role="alert">
                    There is no information with the filters applied
                    <a href="{{ route('category.index') }}" class="btn btn-warning"><x-icons.refresh /> </a>
                </div>
            @else
                <!-- Table displaying categories -->
                <div class="table-responsive">
                    <table class="table table-striped table-dark table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="w-20 text-center">ID
                                    <div class="dropdown d-inline">
                                        <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0" id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton10">
                                            <li><a class="dropdown-item" href="{{ route('category.index', ['column_name' => 'id', 'sort' => 'asc']) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                            <li><a class="dropdown-item" href="{{ route('category.index', ['column_name' => 'id', 'sort' => 'desc']) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th scope="col">Name
                                    <div class="dropdown d-inline">
                                        <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0" id="dropdownMenuButton11" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton11">
                                            <li><a class="dropdown-item" href="{{ route('category.index', ['column_name' => 'name', 'sort' => 'asc']) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                            <li><a class="dropdown-item" href="{{ route('category.index', ['column_name' => 'name', 'sort' => 'desc']) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th scope="col" class="w-20">Status
                                    <div class="dropdown d-inline">
                                        <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0" id="dropdownMenuButton12" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton12">
                                            <li><a class="dropdown-item" href="{{ route('category.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'status'])) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                            <li><a class="dropdown-item" href="{{ route('category.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'status'])) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th scope="col" class="w-25">Created at
                                    <div class="dropdown d-inline">
                                        <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0" id="dropdownMenuButton12" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton12">
                                            <li><a class="dropdown-item" href="{{ route('category.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'created_at'])) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                            <li><a class="dropdown-item" href="{{ route('category.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'created_at'])) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th scope="col">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td class="text-center">{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    @if($category->status)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td> 
                                <td>{{ $category->created_at }}</td>
                                <td class="d-flex">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success me-2 px-2" data-bs-toggle="modal" data-bs-target="#edit{{ $category->id }}">
                                        <x-icons.pencil />
                                    </button>
                                    <button type="button" class="btn btn-danger px-2" data-bs-toggle="modal" data-bs-target="#delete{{ $category->id }}">
                                        <x-icons.trash />
                                    </button>
                                </td>
                            </tr>
                            @include('category.info', ['category' => $category])
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $categories->links() }} 
                    </div>
                </div>
            @endif
        </div>
    </main>
</x-app-layout>

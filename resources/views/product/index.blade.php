<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-600 dark:text-gray-600 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>
    <x-slot name="title">
        {{ __('Product Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your Product\'s information.') }}
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
                <form method="GET" action="{{ route('product.index') }}">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 mb-2">
                            <input type="text" class="form-control" placeholder="Product Name..." name="name"
                                value="{{ request('name') }}">
                        </div>
                        <div class="col-md-2 col-sm-6 mb-2">
                            <select class="form-select" name="category">
                                <option value="">Select Categ..</option>
                                <!-- Populate with category options -->
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ request('category') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-2">
                            <select class="form-select" name="status">
                                <option value="">Select Status</option>
                                <option value="1" {{ request('status') == '1' ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ request('status') == '0' ? 'selected' : '' }}>Inactive
                                </option>
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-2 mb-2">
                            <button type="submit" class="btn btn-primary mr-2"><x-icons.search-circle /></button>
                            <a href="{{ route('product.index') }}" class="btn btn-warning"><x-icons.refresh /> </a>
                        </div>
                        <div class="col-md-4 col-sm-12 d-flex justify-content-end mb-2">
                            <a href="{{ route('product.create') }}" class="btn btn-primary">
                                <x-icons.plus-circle />
                            </a>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Button trigger modal -->
            @if ($products->isEmpty())
                <div class="alert alert-warning" role="alert">
                    There is no information with the filters applied
                    <!-- Button to reset filters -->
                    <a href="{{ route('product.index') }}" class="btn btn-warning"><x-icons.refresh /> </a>
                </div>
            @else
                <div class="table-responsive">
                    <table class="table table-striped table-dark text-sm">
                        <thead>
                            <tr>
                                <th scope="col">ID
                                    <div class="dropdown d-inline">
                                        <span
                                            class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"
                                            id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton10">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('product.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'id'])) }}"><i
                                                        class="bi bi-sort-ascending"></i> Asc</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('product.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'id'])) }}"><i
                                                        class="bi bi-sort-descending"></i> Desc</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th scope="col">Product Name
                                    <div class="dropdown d-inline">
                                        <span
                                            class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"
                                            id="dropdownMenuButton11" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton11">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('product.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'name'])) }}"><i
                                                        class="bi bi-sort-ascending"></i> Asc</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('product.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'name'])) }}"><i
                                                        class="bi bi-sort-descending"></i> Desc</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th scope="col">Picture</th>
                                <th scope="col">Weight
                                    <div class="dropdown d-inline">
                                        <span
                                            class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"
                                            id="dropdownMenuButton12" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton12">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('product.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'weight'])) }}"><i
                                                        class="bi bi-sort-ascending"></i> Asc</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('product.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'weight'])) }}"><i
                                                        class="bi bi-sort-descending"></i> Desc</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th scope="col">Presentation
                                    <div class="dropdown d-inline">
                                        <span
                                            class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"
                                            id="dropdownMenuButton14" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton14">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('product.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'presentation'])) }}"><i
                                                        class="bi bi-sort-ascending"></i> Asc</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('product.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'presentation'])) }}"><i
                                                        class="bi bi-sort-descending"></i> Desc</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th scope="col">Category
                                    <div class="dropdown d-inline">
                                        <span
                                            class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"
                                            id="dropdownMenuButton15" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton15">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('product.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'category_id'])) }}"><i
                                                        class="bi bi-sort-ascending"></i> Asc</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('product.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'category_id'])) }}"><i
                                                        class="bi bi-sort-descending"></i> Desc</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th scope="col">Status
                                    <div class="dropdown d-inline">
                                        <span
                                            class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"
                                            id="dropdownMenuButton16" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="bi bi-sort"></i>
                                        </span>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton16">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('product.index', ['sort' => 'asc', 'column' => 'status']) }}"><i
                                                        class="bi bi-sort-ascending"></i>Active</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('product.index', ['sort' => 'desc', 'column' => 'status']) }}"><i
                                                        class="bi-sort-descending"></i>Inactive</a></li>
                                        </ul>
                                    </div>
                                </th>
                                <th scope="col">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td class="min-w-[200px] max-w-4xl">{{ $product->name }}</td>
                                    <td><img src="{{ $product->picture }}" alt="{{ $product->name }}"
                                            class="img-thumbnail w-8 h-8"></td>
                                    <td>{{ $product->weight }}</td>
                                    <td>{{ $product->presentation }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>
                                        @if ($product->status)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="d-flex">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-success me-2 px-2"
                                            data-bs-toggle="modal" data-bs-target="#edit{{ $product->id }}">
                                            <x-icons.pencil />
                                        </button>
                                        <button type="button" class="btn btn-danger px-2" data-bs-toggle="modal"
                                            data-bs-target="#delete{{ $product->id }}">
                                            <x-icons.trash />
                                        </button>
                                    </td>
                                </tr>
                                @include('product.info', ['product' => $product])
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Show pagination only if there are more than 10 products -->
                    @if ($products->total() > 20)
                        {{ $products->links() }}
                    @endif
                </div>
            @endif
        </div>
    </main>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Scraping Products') }}
        </h2>
    </x-slot>

    <x-slot name="title">
        {{ __('Scraping Products') }}
    </x-slot>

    <main class="relative">
        <div class="container mt-4">
            <!-- Filter options -->
            <div class="relative mb-3">
                <form method="GET" action="{{ route('scraping_product.index') }}">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 mb-2">
                            <!-- Input for Product Name -->
                            <input type="text" class="form-control" placeholder="Product Name" name="product_name">
                        </div>
                        <!-- Add more filter inputs as needed -->
                        <div class="col-md-2 col-sm-6 mb-2">
                            <!-- Select for Store -->
                            <select class="form-select" name="store">
                                <option value="">Select Store</option>
                                @foreach($stores as $store)
                                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-2">
                            <!-- Button to apply filters -->
                            <button type="submit" class="btn btn-primary w-100">Apply Filters</button>
                        </div>
                        <div class="col-md-2 col-sm-6 mb-2">
                            <!-- Button to reset filters -->
                            <a href="{{ route('scraping_product.index') }}" class="btn btn-warning"><x-icons.refresh /> </a>
                        </div>
                        
                        <div class="col-md-3 absolute w-content right-0 top-0 grid">
                            <button type="button" class="btn btn-primary relative pl-10 w-40" data-bs-toggle="modal" data-bs-target="#create">
                                <x-icons.plus-circle class="absolute  "/>
                                Scraping Product

                            </button>
                        </div>
                        
                    </div>
                </form>
            </div>

            <!-- Table displaying scraping products -->
            <div class="table-responsive">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID
                                <div class="dropdown d-inline">
                                    <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"  id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-sort"></i>
                                    </span>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <li><a class="dropdown-item" href="{{ route('scraping_product.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'id'])) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                        <li><a class="dropdown-item" href="{{ route('scraping_product.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'id'])) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                    </ul>
                                </div>
                            </th>
                            <th scope="col">Slug   <div class="dropdown d-inline">
                                <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"  id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-sort"></i>
                                </span>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item" href="{{ route('scraping_product.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'slug'])) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                    <li><a class="dropdown-item" href="{{ route('scraping_product.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'slug'])) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                </ul>
                            </div></th>
                            <th scope="col">Product   <div class="dropdown d-inline">
                                <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"  id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-sort"></i>
                                </span>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item" href="{{ route('scraping_product.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'id_product'])) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                    <li><a class="dropdown-item" href="{{ route('scraping_product.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'id_product'])) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                </ul>
                            </div></th>
                            <th scope="col">Store   <div class="dropdown d-inline">
                                <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"  id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-sort"></i>
                                </span>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item" href="{{ route('scraping_product.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'id_store'])) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                    <li><a class="dropdown-item" href="{{ route('scraping_product.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'id_store'])) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                </ul>
                            </div></th>
                            <th scope="col">Status   <div class="dropdown d-inline">
                                <span class="btn btn-sm btn-secondary dropdown-toggle px-0 py-0 bg-transparent border-0"  id="dropdownMenuButton10" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bi bi-sort"></i>
                                </span>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item" href="{{ route('scraping_product.index', array_merge(request()->query(), ['sort' => 'asc', 'column' => 'status'])) }}"><i class="bi bi-sort-ascending"></i> Asc</a></li>
                                    <li><a class="dropdown-item" href="{{ route('scraping_product.index', array_merge(request()->query(), ['sort' => 'desc', 'column' => 'status'])) }}"><i class="bi bi-sort-descending"></i> Desc</a></li>
                                </ul>
                            </div></th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($scrapingProducts as $scrapingProduct)
                        <tr>
                            <td>{{ $scrapingProduct->id }}</td>
                            <td>{{ $scrapingProduct->slug }}</td>
                            <td>{{ $scrapingProduct->product->name }}</td>
                            <td>{{ $scrapingProduct->store->name }}</td>
                            <td>{{ $scrapingProduct->status ? 'Active' : 'Inactive' }}</td>
                            <td>
                                <!-- Buttons to edit and delete -->
                                <button type="button" class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#edit{{ $scrapingProduct->id }}">
                                    <x-icons.pencil />
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $scrapingProduct->id }}">
                                    <x-icons.trash />
                                </button>
                            </td>
                        </tr>
                        <!-- Include modals for edit and delete -->
                        @include('scraping_product.info', ['scrapingProduct' => $scrapingProduct])
                        @endforeach
                    </tbody>
                </table>
                <!-- Pagination links -->
                {{ $scrapingProducts->links() }}
                <br><br>
            </div>
            <!-- Include modal for adding new scraping product -->
            @include('scraping_product.create')
        </div>
    </main>
</x-app-layout>

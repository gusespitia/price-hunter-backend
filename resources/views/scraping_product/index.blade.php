<!-- resources/views/scraping_product/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Scraping Products') }}
        </h2>
    </x-slot>

    <x-slot name="title">
        {{ __('Scraping Products') }}
    </x-slot>

    <main>
        <div class="row mt-4">
            <div class="col-md-2"></div>
            <div class="col-md-8">
              
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                    Add a New Scraping Product
                </button>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Product</th>
                                <th scope="col">Store</th>
                                <th scope="col">Status</th>
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
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{ $scrapingProduct->id }}">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $scrapingProduct->id }}">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            @include('scraping_product.info')
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @include('scraping_product.create')
            </div>
            <div class="col-md-2"></div>
        </div>
    </main>
</x-app-layout>

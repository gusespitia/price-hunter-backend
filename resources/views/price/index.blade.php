<!-- resources/views/price/index.blade.php -->

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
        <div class="row mt-4">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                    Add a New Price
                </button>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Combo ID</th>
                                <th scope="col">Data</th>
                                <th scope="col">Price</th>
                                <th scope="col">Scraping Product</th>
                                <th scope="col">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($prices as $price)
                            <tr>
                                <td>{{ $price->id }}</td>
                                <td>{{ $price->combo_id }}</td>
                                <td>{{ $price->data }}</td>
                                <td>{{ $price->price }}</td>
                                <td>{{ $price->scrapingProduct->slug }}</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{ $price->id }}">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $price->id }}">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            @include('price.info')
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @include('price.create')
            </div>
            <div class="col-md-2"></div>
        </div>
    </main>
</x-app-layout>

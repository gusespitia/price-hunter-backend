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
            <!-- Button trigger modal -->
            <div class="d-flex justify-content-start mb-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                    Add a New Price
                </button>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Product Name</th>
                            <th scope="col" colspan="2"> <!-- Colspan para combinar dos celdas -->
                                <div class="d-flex justify-content-between align-items-center">
                                    Price
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                             <i class="bi bi-sort"></i>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="{{ route('price.index', ['sort' => 'asc']) }}"><i class="bi bi-sort-ascending"></i> Ascending</a></li>
                                            <li><a class="dropdown-item" href="{{ route('price.index', ['sort' => 'desc']) }}"><i class="bi bi-sort-descending"></i> Descending</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </th>
                            <th scope="col">Store</th>
                            <th scope="col">Product ID</th>
                            <th scope="col">Datum</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prices as $price)
                        <tr>
                            <td>{{ $price->id }}</td>
                            <td>{{ $price->data }}</td>
                            <td>{{ $price->price }}</td>
                            <td></td>
                            <td>{{ $price->id_store }}</td>
                            <td>{{ $price->id_product }}</td>
                            <td>{{ $price->created_at }}</td>
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
                {{ $prices->links() }}
                <br><br>
            </div>
            @include('price.create')
        </div>
        <div class="col-md-2"></div>
    </main>
</x-app-layout>

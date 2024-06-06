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
            <!-- Filter options -->
            <div class="mb-3">
                <form method="GET" action="{{ route('price.index') }}">
                    <div class="row">
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Product Name" name="product_name">
                        </div>
                     
                        <div class="col-md-3">
                            <input type="date" class="form-control" name="datum">
                        </div>
                        <div class="col-md-3">
                            <select class="form-select" name="store">
                                <option value="">Select Store</option>
                                <!-- Populate with store options -->
                                @foreach($stores as $store)
                                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary">Apply Filters</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">
                                Product Name
                                <a href="{{ route('price.index', ['sort' => $sort === 'asc' && $column === 'data' ]) }}">ASC</a>                           
                            </th>
                            
                            <th scope="col">Price</th>
                            <th scope="col">Store</th>
                            <th scope="col">Product ID</th>
                            <th scope="col">Datum</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prices as $price)
                        <tr>
                            <td>{{ $price->id }}</td>
                            <td>{{ $price->data }}</td>
                            <td>{{ $price->price }}</td>                                         
                            <td>{{ $price->id_store }}</td>
                            <td>{{ $price->id_product }}</td>
                            <td>{{ $price->created_at }}</td>
                            <td>
                                @if($price->status)
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Inactive</span>
                                @endif
                            </td>                           
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $prices->links() }}
                <br><br>
            </div>
        </div>
        <div class="col-md-2"></div>
    </main>
</x-app-layout>

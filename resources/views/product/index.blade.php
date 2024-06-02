<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>
    <x-slot name="title">
        {{ __('Product Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your Product\'s  information.') }}
    </x-slot>
    <main>
        <div class="row mt-4">
            <div class="col-md-1"></div>
            <div class="col-md-10">              
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                    Add a New Product
                </button>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Product ID</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Picture</th>
                                <th scope="col">Presentation</th>
                                <th scope="col">Category</th>
                                <th scope="col">Status</th>
                                <th scope="col">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr class="">
                                <td scope="row">{{ $product->id }}</td>
                                <td scope="row">{{ $product->name }}</td>
                                <td><img src="{{ $product->picture }}" alt="{{ $product->name }}"></td>
                                <td>{{ $product->presentation }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->status ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{ $product->id }}">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $product->id }}">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            @include('product.info')
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @include('product.create')
            </div>
            <div class="col-md-1"></div>
        </div>
    </main>
</x-app-layout>

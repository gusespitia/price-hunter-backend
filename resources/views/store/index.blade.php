<!-- resources/views/store/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Stores') }}
        </h2>
    </x-slot>

    <x-slot name="title">
        {{ __('Stores') }}
    </x-slot>

    <main>
        <div class="row mt-4">
            <div class="col-md-2"></div>
            <div class="col-md-8">
          
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                    Add a New Store
                </button>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Store ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">URL Base</th>
                                <th scope="col">Logo</th>
                                <th scope="col">Status</th>
                                <th scope="col">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stores as $store)
                            <tr>
                                <td>{{ $store->id }}</td>
                                <td>{{ $store->name }}</td>
                                <td>{{ $store->url_base }}</td>
                                <td><img src="{{ $store->logo }}" alt="{{ $store->name }}"></td>
                                <td>{{ $store->status ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{ $store->id }}">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $store->id }}">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            @include('store.info')
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @include('store.create')
            </div>
            <div class="col-md-2"></div>
        </div>
    </main>
</x-app-layout>

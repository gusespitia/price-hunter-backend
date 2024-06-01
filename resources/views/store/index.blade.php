<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Stores') }}
        </h2>
    </x-slot>
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <main>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">   
                <h2>Stores</h2>        
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                    Add a New Store
                </button>
                <br><br> 
                <div class="table-responsive">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>                         
                                <th scope="col">Store ID</th>
                                <th scope="col">Store Name</th>                    
                                <th scope="col">Store URL</th>
                                <th scope="col">Store Logo</th>
                                <th scope="col">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stores as $store)                     
                            <tr>
                                <td>{{ $store->id }}</td>
                                <td>{{ $store->store_name }}</td>
                                <td>{{ $store->store_url }}</td>
                                <td><img src="{{ $store->store_logo }}" alt="{{ $store->store_name }}" style="max-width: 100px;"></td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{ $store->id }}">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $store->id }}">
                                        Delete
                                    </button>
                                </td>
                            </tr>
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

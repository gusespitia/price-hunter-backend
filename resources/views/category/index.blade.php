<!-- resources/views/category/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <x-slot name="title">
        {{ __('Categories') }}
    </x-slot>

    <main>
        <div class="row mt-4">
            <div class="col-md-2"></div>
            <div class="col-md-8">
             
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                    Add a New Category
                </button>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Category ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->status ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{ $category->id }}">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $category->id }}">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            @include('category.info')
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @include('category.create')
            </div>
            <div class="col-md-2"></div>
        </div>
    </main>
</x-app-layout>

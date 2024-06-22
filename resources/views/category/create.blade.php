<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Add a New Category') }}
        </h2>
    </x-slot>

    <x-slot name="title">
        {{ __('Add a New Category') }}
    </x-slot>

    <main class="d-flex justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <form id="createCategoryForm" method="POST" action="{{ route('category.store') }}" class="text-black bg-white mt-4 p-4 rounded-md" needs-validation autocomplete="off">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Category Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input @error('status') is-invalid @enderror" id="status" name="status" value="1" checked>
                            <label class="form-check-label" for="status">Status</label>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="gap-3 d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" onclick="window.history.back();">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>

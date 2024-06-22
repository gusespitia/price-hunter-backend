<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Add a New Store') }}
        </h2>
    </x-slot>

    <x-slot name="title">
        {{ __('Add a New Store') }}
    </x-slot>

    <main class="d-flex justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <form id="createStoreForm" method="POST" action="{{ route('store.store') }}" class="text-black bg-white mt-4 p-4 rounded-md" needs-validation autocomplete="off">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="url_base" class="form-label">URL Base</label>
                            <input type="text" class="form-control @error('url_base') is-invalid @enderror" id="url_base" name="url_base" value="{{ old('url_base') }}" required>
                            @error('url_base')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="text" class="form-control @error('logo') is-invalid @enderror" id="logo" name="logo" value="{{ old('logo') }}" required>
                            @error('logo')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control @error('status') is-invalid @enderror" id="status" name="status" required>
                                <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
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

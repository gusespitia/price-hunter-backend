<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Add a New Scraping Product') }}
        </h2>
    </x-slot>

    <x-slot name="title">
        {{ __('Add a New Scraping Product') }}
    </x-slot>

    <main class="d-flex justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <form method="POST" action="{{ route('scraping_product.store') }}" class="text-black bg-white mt-4 p-4 rounded-md">
                        @csrf
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required>
                            @error('slug')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="id_product" class="form-label">Product</label>
                            <select class="form-select @error('id_product') is-invalid @enderror" id="id_product" name="id_product" required>
                                @foreach($products as $product)
                                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                                @endforeach
                            </select>
                            @error('id_product')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="id_store" class="form-label">Store</label>
                            <select class="form-select @error('id_store') is-invalid @enderror" id="id_store" name="id_store" required>
                                @foreach($stores as $store)
                                    <option value="{{ $store->id }}">{{ $store->name }}</option>
                                @endforeach
                            </select>
                            @error('id_store')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="status" name="status" value="1" checked>
                            <label class="form-check-label" for="status">Status</label>
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

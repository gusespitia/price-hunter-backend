<!-- resources/views/product/create.blade.php -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{ route('product.store') }}">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="createLabel">Add a New Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="picture" class="form-label">Picture URL</label>
                        <input type="text" class="form-control" id="picture" name="picture" required>
                    </div>
                    <div class="mb-3">
                        <label for="weight" class="form-label">Weight</label>
                        <input type="text" class="form-control" id="weight" name="weight" required>
                    </div>
                    <div class="mb-3">
                        <label for="presentation" class="form-label">Presentation</label>
                        <input type="text" class="form-control" id="presentation" name="presentation" required>
                    </div>
                    <div class="mb-3">
                        <label for="id_category" class="form-label">Category</label>
                        <select class="form-control" id="id_category" name="id_category" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="status" name="status" value="1" checked>
                        <label class="form-check-label" for="status">Status</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
  </div>
  
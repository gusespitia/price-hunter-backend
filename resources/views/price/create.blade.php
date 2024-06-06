<!-- resources/views/price/create.blade.php -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{ route('price.store') }}">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="createLabel">Add a New Price</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Input fields for creating a new price -->
                    <div class="mb-3">
                        <label for="id_product" class="form-label">ID Product</label>
                        <input type="text" class="form-control" id="id_product" name="id_product" required>
                    </div>
                    <div class="mb-3">
                        <label for="id_store" class="form-label">ID Store</label>
                        <input type="text" class="form-control" id="id_store" name="id_store" required>
                    </div>
                    <div class="mb-3">
                        <label for="data" class="form-label">Data</label>
                        <input type="text" class="form-control" id="data" name="data" required>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="mb-3">
                        <label for="presentation" class="form-label">Presentation</label>
                        <input type="text" class="form-control" id="presentation" name="presentation" required>
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

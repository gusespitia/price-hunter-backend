<!-- Edit Modal -->
<div class="modal fade" id="edit{{ $scrapingProduct->id }}" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{ route('scraping_product.update', $scrapingProduct->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editLabel">Edit Scraping Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="slug" name="slug" value="{{ $scrapingProduct->slug }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="id_product" class="form-label">Product</label>
                        <select class="form-select" id="id_product" name="id_product" required>
                            @foreach($products as $product)
                                <option value="{{ $product->id }}" {{ $scrapingProduct->id_product == $product->id ? 'selected' : '' }}>{{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="id_store" class="form-label">Store</label>
                        <select class="form-select" id="id_store" name="id_store" required>
                            @foreach($stores as $store)
                                <option value="{{ $store->id }}" {{ $scrapingProduct->id_store == $store->id ? 'selected' : '' }}>{{ $store->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="status" name="status" value="1" {{ $scrapingProduct->status ? 'checked' : '' }}>
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
  
  <!-- Delete Modal -->
  <div class="modal fade" id="delete{{ $scrapingProduct->id }}" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{ route('scraping_product.destroy', $scrapingProduct->id) }}">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteLabel">Delete Scraping Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this scraping product?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
  </div>
  
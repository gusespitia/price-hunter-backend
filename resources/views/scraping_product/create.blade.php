<!-- resources/views/scraping_product/create.blade.php -->

<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="createLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <form method="POST" action="{{ route('scraping_product.store') }}">
              @csrf
              <div class="modal-header">
                  <h5 class="modal-title" id="createLabel">Add a New Scraping Product</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="mb-3">
                      <label for="slug" class="form-label">Slug</label>
                      <input type="text" class="form-control" id="slug" name="slug" required>
                  </div>
                  <div class="mb-3">
                      <label for="id_product" class="form-label">Product</label>
                      <select class="form-control" id="id_product" name="id_product" required>
                          @foreach($products as $product)
                              <option value="{{ $product->id }}">{{ $product->name }}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="mb-3">
                      <label for="id_store" class="form-label">Store</label>
                      <select class="form-control" id="id_store" name="id_store" required>
                          @foreach($stores as $store)
                              <option value="{{ $store->id }}">{{ $store->name }}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="mb-3">
                      <label for="status" class="form-label">Status</label>
                      <input type="checkbox" id="status" name="status" value="1" checked>
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

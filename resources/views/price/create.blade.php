<!-- resources/views/price/create.blade.php -->

<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="createLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <form method="POST" action="{{ route('price.store') }}">
              @csrf
              <div class="modal-header">
                  <h5 class="modal-title" id="createLabel">Add a New Price</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="mb-3">
                      <label for="combo_id" class="form-label">Combo ID</label>
                      <input type="number" class="form-control" id="combo_id" name="combo_id" required>
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
                      <label for="scraping_product_id" class="form-label">Scraping Product</label>
                      <select class="form-control" id="scraping_product_id" name="scraping_product_id" required>
                          @foreach($scrapingProducts as $scrapingProduct)
                              <option value="{{ $scrapingProduct->id }}">{{ $scrapingProduct->slug }}</option>
                          @endforeach
                      </select>
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

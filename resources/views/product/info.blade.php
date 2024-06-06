
<!-- resources/views/product/edit.blade.php -->
<div class="modal fade" id="edit{{ $product->id }}" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <form method="POST" action="{{ route('product.update', $product->id) }}">
              @csrf
              @method('PUT')
              <div class="modal-header">
                  <h5 class="modal-title" id="editLabel">Edit Product</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="mb-3">
                      <label for="name" class="form-label">Product Name</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                  </div>
                  <div class="mb-3">
                      <label for="picture" class="form-label">Picture URL</label>
                      <input type="text" class="form-control" id="picture" name="picture" value="{{ $product->picture }}" required>
                  </div>
                  <div class="mb-3">
                      <label for="weight" class="form-label">Weight</label>
                      <input type="text" class="form-control" id="weight" name="weight" value="{{ $product->weight }}" required>
                  </div>
                  <div class="mb-3">
                      <label for="presentation" class="form-label">Presentation</label>
                      <input type="text" class="form-control" id="presentation" name="presentation" value="{{ $product->presentation }}" required>
                  </div>
                  <div class="mb-3">
                      <label for="id_category" class="form-label">Category</label>
                      <select class="form-control" id="id_category" name="id_category" required>
                          @foreach($categories as $category)
                              <option value="{{ $category->id }}" {{ $category->id == $product->id_category ? 'selected' : '' }}>
                                  {{ $category->name }}
                              </option>
                          @endforeach
                      </select>
                  </div>
                  <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="status" name="status" value="1" {{ $product->status ? 'checked' : '' }}>
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




  {{-- Delete --}}

  
  <!-- Modal -->
 <!-- resources/views/product/delete.blade.php -->
<div class="modal fade" id="delete{{ $product->id }}" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <form method="POST" action="{{ route('product.destroy', $product->id) }}">
              @csrf
              @method('DELETE')
              <div class="modal-header">
                  <h5 class="modal-title" id="deleteLabel">Delete Product</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <p>Are you sure you want to delete the product <strong>{{ $product->name }}</strong>?</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-danger">Delete</button>
              </div>
          </form>
      </div>
  </div>
</div>

<!-- resources/views/store/info.blade.php -->

<!-- Edit Modal -->
<div class="modal fade" id="edit{{ $store->id }}" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <form method="POST" action="{{ route('store.update', $store->id) }}">
              @csrf
              @method('PUT')
              <div class="modal-header">
                  <h5 class="modal-title" id="editLabel">Edit Store</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="mb-3">
                      <label for="name" class="form-label">Store Name</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{ $store->name }}" required>
                  </div>
                  <div class="mb-3">
                      <label for="url_base" class="form-label">URL Base</label>
                      <input type="text" class="form-control" id="url_base" name="url_base" value="{{ $store->url_base }}" required>
                  </div>
                  <div class="mb-3">
                      <label for="logo" class="form-label">Logo</label>
                      <input type="text" class="form-control" id="logo" name="logo" value="{{ $store->logo }}" required>
                  </div>
                  <div class="mb-3">
                      <label for="status" class="form-label">Status</label>
                      <input type="checkbox" id="status" name="status" value="1" {{ $store->status ? 'checked' : '' }}>
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
<div class="modal fade" id="delete{{ $store->id }}" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <form method="POST" action="{{ route('store.destroy', $store->id) }}">
              @csrf
              @method('DELETE')
              <div class="modal-header">
                  <h5 class="modal-title" id="deleteLabel">Delete Store</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  Are you sure you want to delete this store?
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-danger">Delete</button>
              </div>
          </form>
      </div>
  </div>
</div>

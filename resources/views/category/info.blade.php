<!-- resources/views/category/info.blade.php -->

<!-- Edit Modal -->
<div class="modal fade" id="edit{{ $category->id }}" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <form method="POST" action="{{ route('category.update', $category->id) }}">
              @csrf
              @method('PUT')
              <div class="modal-header">
                  <h5 class="modal-title" id="editLabel">Edit Category</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="mb-3">
                      <label for="name" class="form-label">Category Name</label>
                      <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
                  </div>
                  <div class="mb-3">
                      <label for="status" class="form-label">Status</label>
                      <input type="checkbox" id="status" name="status" value="1" {{ $category->status ? 'checked' : '' }}>
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
<div class="modal fade" id="delete{{ $category->id }}" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <form method="POST" action="{{ route('category.destroy', $category->id) }}">
              @csrf
              @method('DELETE')
              <div class="modal-header">
                  <h5 class="modal-title" id="deleteLabel">Delete Category</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  Are you sure you want to delete this category?
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-danger">Delete</button>
              </div>
          </form>
      </div>
  </div>
</div>

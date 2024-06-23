<!-- resources/views/price/info.blade.php -->
<!-- Modal for editing price -->
<div class="modal fade" id="edit{{ $price->id }}" tabindex="-1" aria-labelledby="editLabel{{ $price->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="POST" action="{{ route('price.update', $price->id) }}">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editLabel{{ $price->id }}">Edit Price</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="data{{ $price->id }}" class="form-label">Data</label>
                        <input type="text" class="form-control" id="data{{ $price->id }}" name="data" value="{{ $price->data }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="price{{ $price->id }}" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price{{ $price->id }}" name="price" value="{{ $price->price }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="presentation{{ $price->id }}" class="form-label">Presentation</label>
                        <input type="text" class="form-control" id="presentation{{ $price->id }}" name="presentation" value="{{ $price->presentation }}" required>
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
 <!-- resources/views/price/delete.blade.php -->
<div class="modal fade" id="delete{{ $price->id }}" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <form method="POST" action="{{ route('price.destroy', $price->id) }}">
              @csrf
              @method('DELETE')
              <div class="modal-header">
                  <h5 class="modal-title" id="deleteLabel">Delete Price</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <p>Are you sure you want to delete the price <strong>{{ $price->name }}</strong>?</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-danger">Delete</button>
              </div>
          </form>
      </div>
  </div>
</div>
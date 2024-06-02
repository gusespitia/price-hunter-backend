<!-- Modal para Agregar Nuevo Producto -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="createProductModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="createProductModalLabel">Agregar Nuevo Producto</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="{{ route('product.store') }}" method="POST">
                  @csrf
                  <div class="mb-3">
                      <label for="productName" class="form-label">Nombre del Producto</label>
                      <input type="text" class="form-control" id="productName" name="name" required>
                  </div>
                  <div class="mb-3">
                      <label for="productPicture" class="form-label">URL de la Imagen</label>
                      <input type="text" class="form-control" id="productPicture" name="picture" required>
                  </div>
                  <div class="mb-3">
                      <label for="productPresentation" class="form-label">Presentación</label>
                      <input type="text" class="form-control" id="productPresentation" name="presentation" required>
                  </div>
                  <div class="mb-3">
                      <label for="productCategory" class="form-label">Categoría del Producto</label>
                      <input type="text" class="form-control" id="productCategory" name="id_category" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Guardar Producto</button>
              </form>
          </div>
      </div>
  </div>
</div>


  <!-- Modal -->
  <div class="modal fade" id="edit{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
         <div class="modal-body">
         <div class="mb-3">
            <label for="" class="form-label">Id Product</label>
            <input
                type="text"
                class="form-control"
                name="id_product"
                id=""
                aria-describedby="helpId"
                placeholder="Please insert a name"
                value={{$product->id_product}}
            />  
         </div>
         <div class="mb-3">
            <label for="" class="form-label">Product Name</label>
            <input
                type="text"
                class="form-control"
                name="title"
                id=""
                aria-describedby="helpId"
                placeholder="Please insert a email"
                value={{$product->title}}
            />  
             </div>  
             <div class="mb-3">
              <label for="" class="form-label">Product Picture</label>
              <input
                  type="text"
                  class="form-control"
                  name="picture"
                  id=""
                  aria-describedby="helpId"
                  placeholder="Please insert a email"
                  value={{$product->image}}
              />  
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
  <div class="modal fade" id="delete{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('product.destroy',$product->id)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('DELETE')
         <div class="modal-body">
        Are you sure to delete <strong>{{$product->name}} </strong> product?
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Accept</button>       
          </div>
        </form>
      </div>
    </div>
  </div>
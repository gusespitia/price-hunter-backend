
  <!-- Modal -->
  <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">add new Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form action="{{route('product.store')}} " method="post" enctype="multipart/form-data">
          @csrf
         <div class="modal-body">
        
         <div class="mb-3">
            <label for="" class="form-label">Product Name</label>
            <input
                type="text"
                class="form-control"
                name="product_name"
                id=""
                aria-describedby="helpId"
                placeholder="Please insert a name"
            />  
             </div>
             <div class="mb-3">
              <label for="" class="form-label">Product Picture</label>
              <input
                  type="text"
                  class="form-control"
                  name="product_picture"
                  id=""
                  aria-describedby="helpId"
                  placeholder="Please insert a url of your Picture"
              />  
               </div>
               <div class="mb-3">
                <label for="" class="form-label">Product Presentation</label>
                <input
                    type="text"
                    class="form-control"
                    name="product_weight"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Please insert a Presentation"
                />  
                 </div>
                 <div class="mb-3">
                  <label for="" class="form-label">Product Category</label>
                  <input
                      type="number"
                      class="form-control"
                      name="id_product_category"
                      id=""
                      aria-describedby="helpId"
                      placeholder="Please insert an ID Category"
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
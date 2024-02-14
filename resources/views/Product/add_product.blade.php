  <!-- Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">


    <form id="submitform">

      @csrf

    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-header">
          <h5 class="modal-title" id="productModalLabel">Add Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>



<div id="errorMsg"></div>

        <div class="modal-body">
    


         

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="name">
                  </div>
             
                <div class="mb-3">
                  <label for="Price" class="form-label">Price</label>
                  <input type="text" class="form-control" name="price" id="price" aria-describedby="Price">
                </div>
           

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="SubmiteForm"  class="btn btn-primary">Save changes</button>
                  </div>
          
              
              {{-- </form> --}}

        </div>


     

      </div>
    </div>

  </form>
  </div>
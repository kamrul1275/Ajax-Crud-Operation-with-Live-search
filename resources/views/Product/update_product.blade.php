  <!-- Modal -->
  

  
  
  <div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="UpdateProductModalLabel" aria-hidden="true">



    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-header">
          <h5 class="modal-title" id="UpdateProductModalLabel">Update Product</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form id="updateProductForm">

     <div id="errorMsg"></div>

        <div class="modal-body">
    

 <input type="hidden" id="up_id"> 
         

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="up_name" id="up_name" aria-describedby="name">
                  </div>
             
                <div class="mb-3">
                  <label for="Price" class="form-label">Price</label>
                  <input type="text" class="form-control" name="up_price" id="up_price" aria-describedby="Price">
                </div>
           

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="updateProduct"  class="btn btn-primary">Save changes</button>
                  </div>
          
              
            

        </div>


      </form>

      </div>
    </div>


  </div>


       
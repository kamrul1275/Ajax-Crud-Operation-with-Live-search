<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <title>Ajax Crud!</title>
  </head>
  <body>





<div class="container">


    <div class="row">
<div class="col-md-12">

    <h3 class="text-center py-2">Ajax Crud Operation</h3>


    <form>



    <div class="card">
        <div class="card-header">
            <!-- <a href="" class="btn btn-primary">Add User</a> -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
   Add Product
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="productModalLabel">Modal title</h5>
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


      </form>

      </div>
    </div>
  </div>


            <!-- end modal -->
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>4343</td>
                    <td>
        
        <a href="" class="btn btn-success"><i class="las la-edit"></i></a>
        <a href="" class="btn btn-danger"><i class="las la-trash"></i></a>
        
                    </td>
                  </tr>
               
                </tbody>
              </table>
        </div>
      </div>


</div>

    </div>
</div>



@include('Product.product_js')

</body>
</html>
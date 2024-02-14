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




    <div class="card">
        <div class="card-header">
            <!-- <a href="" class="btn btn-primary">Add User</a> -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
   Add Product
  </button>





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

                  @foreach ($products as $key=> $product)
                    
                 
                  <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>
        
        <a href="" class="btn btn-success updateProduct" data-bs-toggle="modal" data-bs-target="#UpdateModal"
         data-id="{{$product->id}}"  
         data-name="{{$product->name}}"  
         data-price="{{$product->price}}"  
         
         ><i class="las la-edit"></i></a>



        <a href="" class="btn btn-danger"><i class="las la-trash"></i></a>
        
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>

              {{ $products->links() }}

        </div>
      </div>


</div>

    </div>
</div>



@include('Product.product_js')
@include('Product.add_product')
@include('Product.update_product')

</body>
</html>

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



        <a href="" class="btn btn-danger deleteProduct"   data-id="{{$product->id}}"  ><i class="las la-trash"></i></a>
        
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>

              {{ $products->links() }}

        </div>
     


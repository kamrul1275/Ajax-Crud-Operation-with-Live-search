<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
      
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>


<script>
    $(document).ready(function() {


        $(document).on('click', '#SubmiteForm', function(e) {

            //alert('oky....');
            e.preventDefault();


            let name = $('#name').val();

            let price = $('#price').val();


            ///console.log(name+price);


            $.ajax({


                url: "{{ route('add.product') }}",
                method: "POST",

                data: {
                    name: name,
                    price: price
                },

                success: function(res) {

                    if (res.status == 'success') {

                        $('#addModal').modal('hide');
                        $('#submitform')[0].reset();

                        $('.table').load(location.href + ' .table');


                        
//   start toast


Command: toastr["success"]("Product Successfully..", "success")

toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
            // end toaster




                    }

                },
                error: function(err) {


                    let error = err.responseJSON;

                    $.each(error.errors, function(index, value) {


                        $('#errorMsg').append('<spand class="text-danger">' +
                            value + '</spand>' + '<br>');

                    });


                }


            });

        })


        // edit show value


         $(document).on('click', '.updateProduct', function(){

                //alert('okt');

                let id = $(this).data('id');
                let name = $(this).data('name');
                let price = $(this).data('price');


                $('#up_id').val(id);
                $('#up_name').val(name);
                $('#up_price').val(price);


         });




        //  update product

        $(document).on('click', '#updateProduct', function(e) {

//alert('oky....');


e.preventDefault();

let up_id = $('#up_id').val();
let up_name = $('#up_name').val();

let up_price = $('#up_price').val();


//console.log(up_id+up_name+up_price);


$.ajax({


    url: "{{ route('update.product') }}",
    method: "POST",

    data: {
        up_id:up_id,
        up_name:up_name,
        up_price:up_price,
    },

    success: function(res) {

        if (res.status == 'success') {

            $('#UpdateModal').modal('hide');
         // $('#updateProductForm')[0].reset();

            $('.table').load(location.href + ' .table');

//   start toast


Command: toastr["success"]("Product Successfully..", "success")

toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
            // end toaster


        }

    },
    error: function(err) {


        let error = err.responseJSON;

        $.each(error.errors, function(index, value) {


            $('#errorMsg').append('<spand class="text-danger">' +
                value + '</spand>' + '<br>');

        });


    }






});

})




//delete

$(document).on('click', '.deleteProduct', function(e) {


e.preventDefault();

let product_id = $(this).data('id');

//alert(product_id);

if(confirm('are sure delete.?')){


    $.ajax({

url: "{{ route('delete.product') }}",
method: "POST",

data: {
    product_id:product_id,

},

success: function(res) {

    if (res.status == 'success') {

        $('.table').load(location.href + ' .table');

        
//   start toast


Command: toastr["success"]("Product delete Successfully..", "success")

toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
            // end toaster




    }

},







});


}

});



// paginate



$(document).on('click','.pagination a', function(e){
    e.preventDefault(e);

    let page= $(this).attr('href').split('page=')[1]
    productPaginate(page);

    //alert('oktp');
})


function productPaginate(page){

    $.ajax({
  
        url:"/paginate/product?page="+page,
        success:function(res){
$('.table').html(res);
        }

    })

}


    });
</script>

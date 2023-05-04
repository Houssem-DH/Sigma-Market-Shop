
$(document).ready(function() {

    loadcart();


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

function loadcart()
{
    $.ajax( {
        method:"GET",
        url:"/load-cart",


        success: function(response){



            $('.cart-count').html('');
            $('.cart-count').html(response.count);




        }
    });

}





    $('.increment-btn').click(function(e) {
        e.preventDefault();
        var inc_value=$('.qty-input').val();
        var value=parseInt(inc_value,10);
         value=isNaN(value)? 0 :value;


        if(value<10)
        {
            value++;
            $('.qty-input').val(value);
        }
    });









    $('.decrement-btn').click(function(e) {
        e.preventDefault();
        var dec_value=$('.qty-input').val();
        var value=parseInt(dec_value,10);
         value=isNaN(value)? 0 :value;

        if(value>1)
        {
            value--;
            $('.qty-input').val(value);
        }
    });




    $('.addToCartBtn').click(function(e) {
        e.preventDefault();
        var product_id=$(this).closest('.product_data').find('.prod_id').val();
        var product_qty=$(this).closest('.product_data').find('.qty-input').val();
        var receveur_id=$(this).closest('.product_data').find('.receveur_id').val();




        $.ajax( {
            method:"POST",
            url:"/add-to-cart",
            data:{
                "product_id":product_id,
                "product_qty":product_qty,
            },

            success: function(response){

                loadcart();


                swal(response.status , "");



            }





        });



    });

    $('.addToCartBtnr').click(function(e) {
        e.preventDefault();
        var product_id=$(this).closest('.product_data').find('.prod_id').val();
        var product_price=$(this).closest('.product_data').find('.prod_price').val();
        var product_qty=$(this).closest('.product_data').find('.qty-input').val();
        var receveur_id=$(this).closest('.product_data').find('.receveur_id').val();
        var percentage=$(this).closest('.product_data').find('.percentage').val();







        $.ajax( {
            method:"POST",
            url:"/add-to-cartr" ,
            data:{
                "product_id":product_id,
                "product_qty":product_qty,
                "product_price":product_price,
                "receveur_id":receveur_id,
                "percentage":percentage,



            },

            success: function(response){

                loadcart();


                swal(response.status , "");



            }





        });



    });


    $('.delete-cart-item').click(function(e) {
        e.preventDefault();
        var prod_id=$(this).closest('.product_data').find('.prod_id').val();
        var receveur_id=$(this).closest('.product_data').find('.receveur_id').val();
        var prod_qty=$(this).closest('.product_data').find('.prod_qty').val();
        var percentage=$(this).closest('.product_data').find('.percentage').val();
        var price=$(this).closest('.product_data').find('.price').val();




        $.ajax( {
            method:"POST",
            url:"delete-product",
            data:{
                "prod_id":prod_id,
                "receveur_id":receveur_id,
                "prod_qty":prod_qty,
                "percentage":percentage,
                "price":price,

            },

            success: function(response){
                window.location.reload();

                swal("", response.status, "success");





            }


    });



});

});


